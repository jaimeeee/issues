<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Returns the issues assigned to this user
     */
    public function assignedIssues()
    {
        return $this->hasMany('App\Issue', 'assignee_id', 'id');
    }
    
    /**
     * Returns the comments by this user
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    /**
     * Returns the events by this user
     */
    public function events()
    {
        return $this->hasMany('App\Event');
    }
    
    /**
     * Return the issues createdy by this user
     */
    public function issues()
    {
        return $this->hasMany('App\Issue');
    }
    
    /**
     * Return the milestones created by this user
     */
    public function milestones()
    {
        return $this->hasMany('App\Milestone');
    }
    
    /**
     * Returns the projects created by this user
     */
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
