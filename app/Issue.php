<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    /**
     * Returns the user assigned to fix this issue
     */
    public function assignee()
    {
        return $this->belongsTo('App\User');
    }
    
    /**
     * Returns the comments for this issue
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    /**
     * Returns the events for this issue
     */
    public function events()
    {
        return $this->hasMany('App\Event');
    }
    
    /**
     * Returns the labels tagged for this issue
     */
    public function labels()
    {
        return $this->belongsToMany('App\Label');
    }
    
    /**
     * Returns the milestone assigned to this issue
     */
    public function milestone()
    {
        return $this->hasOne('App\Milestone');
    }
    
    /**
     * Returns the project for this issue
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
    
    /**
     * Returns the user that created this issue
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
