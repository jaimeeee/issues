<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Organization;
use App\Project;
use App\Http\Requests;

class ProjectsController extends Controller
{
    /**
     * Create a new controller instance using the Auth middleware.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Shows the form to create a new project
     * 
     * @return void
     */
    public function create()
    {
        return view('project-create', [
                      'title' => 'Create a new project',
                    ]);
    }
    
    public function saveProject(Reqeuest $request)
    {
        $this->validate($request, [
                'name' => 'required|regex:/^[\w-.]+$/|max:255',
            ]);
        
        $project = new Project;
        
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->user_id = Auth::user()->id;
        
        $project->save();
    }
}
