<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', 'HomeController@index');

/**
 * Organizations
 */

Route::get('/organization/new', 'OrganizationsController@create');
Route::post('/organization/new', 'OrganizationsController@saveOrganization');

/**
 * Projects
 */
Route::get('/new', 'ProjectsController@create');
Route::post('/new', 'ProjectsController@saveProject');

/**
 * Dynamic routes
 */
Route::get('/{organization}', 'OrganizationsController@organization')->where(['organization' => '[\w-.]+']);
Route::get('/{organization}/{project}')->where(['organization' => '[\w-.]+', 'project' => '[\w-.]+']);
