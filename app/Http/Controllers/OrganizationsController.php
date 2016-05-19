<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Organization;
use App\Http\Requests;

class OrganizationsController extends Controller
{
    /**
     * Show the organization list from the database
     * 
     * @return void
     */
    public function index()
    {
        $organizations = Organization::all();
        return view('home', ['organizations' => $organizations]);
    }
    
    /**
     * Shows the form to create a new organization
     * 
     * @return void
     */
    public function create()
    {
        return view('organization-create', [
                        'title' => 'Create an organization',
                    ]);
    }
    
    /**
     * Save the organization on the database
     * @param  Request $request
     * @return void
     */
    public function saveOrganization(Request $request)
    {
        $this->validate($request, [
                'name' => 'required|regex:/^[\w-.]+$/|max:255',
                'company' => 'required|max:255',
            ]);
        
        $organization = new Organization;
        
        $organization->name = $request->input('name');
        $organization->company = $request->input('company');
        $organization->website = $request->input('website');
        $organization->location = $request->input('location');
        $organization->description = $request->input('description');
        
        $organization->save();
        
        return redirect('/' . $organization->name);
    }
    
    /**
     * Shows the organization profile
     * @param  String $organization The organization's URL (organization's name)
     * @return void
     */
    public function organization($organization)
    {
        $organization = Organization::where('name', $organization)->firstOrFail();
    }
}
