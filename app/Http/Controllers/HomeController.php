<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // return home page view
    public function index(Request $request)
    {
        return view('app.home');
    }

    // return login view
    public function login(Request $request)
    {
        return view('app.login');
    }

    // return signup view
    public function signup(Request $request)
    {
        return view('app.signup');
    }

    // return projects view
    public function projects(Request $request)
    {
        $acc_projects = Project::where('status', 1)->get();
        return view('app.acc_projects', [ 'projects' => $acc_projects ]);
    }

    // return submittions view
    public function submittions(Request $request)
    {
        return view('app.submitions');
    }

    // return ideas view
    public function ideas(Request $request)
    {
        $data = Idea::all();
        return view('app.idea', [ 'ideas' => $data ]);
    }

    // return about view
    public function about(Request $request)
    {
        return view('app.about');
    }

    // return review view with project dara
    public function review(Request $request)
    {
        $project = Project::where('id', $request->id)->first();
        return view('app.pub_review', [ 'project' => $project ]);
    }
}
