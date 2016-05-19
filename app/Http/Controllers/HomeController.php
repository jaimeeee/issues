<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Organization;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
}
