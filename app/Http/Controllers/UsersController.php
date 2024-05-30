<?php

namespace App\Http\Controllers;

use App\Jobs\AntiPlagiarismJob;
use App\Models\Document;
use App\Models\Idea;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    // proccess signup date
    public function signup(Request $request)
    {
        // validate the request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return view('app.signup', [
                'errors' => $validator->errors(),
            ]);
        }

        try {
            // attempt to create the user
            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 0,
            ]);

            return view('app.signup', [
                'success' => "Registration Successful, You May Login Now.",
            ]);
        } catch (QueryException $e) {
            // handle database exceptions
            return view('app.signup', [
                'error' => "There was an error, please review all the fields.",
            ]);
        }
    }  

    public function login(Request $request)
    {
        // validate the request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return view('app.login', [
                'errors' => $validator->errors(),
            ]);
        }

        $credentials = $request->only('email', 'password');
        // dd($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'Logged in successfully.');
        }

        return view('app.login', [
            'error' => 'The provided credentials do not match our records.',
        ]);
    }

    // proccess submitiions
    public function submittions(Request $request)
    {
        // validation rules
        $rules = [
            'title' => 'required|string|max:255',
            'members' => 'required|array|min:1',
            'members.*' => 'required|string|max:255',
            'lmd' => 'required|in:License,Master,Doctorate',
            'supervisor' => 'required|string|max:255',
            'year' => 'required|integer|min:1975|max:2024',
            'introduction' => 'required|string',
            'links' => 'required|array|min:1',
            'links.*' => 'required|url',
            'file' => 'nullable|file|max:10240', // adjust max size as needed
        ];

        // validate the request
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) 
        {
            // dd($validator);
            return view('app.submitions', [
                'error' => 'Error, Please Check All the fileds and try again',
            ]);
        }

        $members = $request->input('members');
        if(count($members) >= 3)
        {
            return view('app.submitions', [
                'error' => 'Max Allowed members is 3',
            ]);
        }

        $filePath = "";
        $documentPath = "";

        if ($request->hasFile('file')) 
        {
            // get the file from the request
            $file = $request->file('file');
    
            // generate a unique filename
            $filename = time() . '_' . $file->getClientOriginalName();
    
            // store the file 
            $file->storeAs('uploads', $filename, 'public');
    
            // get file url
            $fileUrl = asset('storage/uploads/' . $filename);
            
            $filePath = $fileUrl;
            $documentPath = storage_path('app/public/uploads/' . $filename);
        }

        // org members
        $mem1 = $members[0] ?? "";
        $mem2 = $members[1] ?? "";
        $mem3 = $members[2] ?? "";

        // prep urls list
        $urls_list = json_encode($request->input("links"));

        try {
            //code...
            $project = Project::create([
                'user_id' => auth()->user()->id,
                'member1' => $mem1,
                'member2' => $mem2,
                'member3' => $mem3,
                'enc' => $request->input('supervisor'),
                'subject' => $request->input('title'),
                'anne' => $request->input('year'),
                'LMD' => $request->input('lmd'),
                'intro' => $request->input('introduction'),
                'url_list' => $urls_list,
                'uploaded_file' => $filePath,
                'status' => 0,
                'report' => '', // init as empty
            ]);

            $document = Document::create([
                'user_id' => auth()->user()->id,
                'file_path' => $documentPath,
            ]);

            if($project)
            {
                // Start Verification Task on the Background <3
                AntiPlagiarismJob::dispatch($document->id, $project->id);

                return view('app.submitions', [
                    'success' => 'Your Project Has Been Submitted Successfuly and its under Review',
                ]);
            }
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return view('app.submitions', [
                'error' => 'Error Saving Your Project, Please try Again ...',
            ]);
        }
    }

    // proccess ideas
    public function ideas(Request $request)
    {
        $idea = Idea::create($request->only('title', 'subject'));
        if($idea)
        {
            return view('app.idea', [
                'success' => 'Your Idea Has Been Posted Successfuly',
            ]);
        }

        return view('app.idea', [
            'error' => 'There Was an Error Saving Your Idea',
        ]);
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return view('app.home');
    }
}
