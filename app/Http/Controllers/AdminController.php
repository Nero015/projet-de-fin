<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // return admin view with data
    public function index(Request $request)
    {
        $tottalProject = Project::all();
        $pendingProjects = Project::where('status', 0)->get();
        $accptedProjects = Project::where('status', 1)->get();
        $rejectedProjects = Project::where('status', 2)->get();
        $users = User::all();

        return view('admin.dashboard', [
            'projectsNum' => count($tottalProject),
            'pendingProjectsNum' => count($pendingProjects),
            'accptedProjectsNum' => count($accptedProjects),
            'rejectedProjectsNum' => count($rejectedProjects),
            'users' => count($users),
            'pendingProjectsList' => $pendingProjects,
            'rejectedProjects' => $rejectedProjects,
            'usersData' => $users,
        ]);
    }

    // return review view with project data
    public function review(Request $request)
    {
        $project = Project::where('id', $request->id)->first();
        return view('admin.review', [
            'project' => $project,
        ]);
    }

    // change project status to accpted
    public function accept(Request $request)
    {
        $project = Project::where('id', $request->id)->first();
        $project->status = 1; // accepted
        $project->save();

        return view('admin.review', [
            'project' => $project,
        ]);
    }

    // delete project from database
    public function delete(Request $request)
    {
        $project = Project::where('id', $request->id)->first();
        $project->delete();

        return redirect()->route('app.admin');
    }
}
