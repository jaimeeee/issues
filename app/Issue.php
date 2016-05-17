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
        return $this->belongsTo('App\Model\User');
    }
    
    /**
     * Returns the comments for this issue
     */
    public function comments()
    {
        return $this->hasMany('App\Model\Comment');
    }
    
    /**
     * Returns the events for this issue
     */
    public function events()
    {
        return $this->hasMany('App\Model\Event');
    }
    
    /**
     * Returns the labels tagged for this issue
     */
    public function labels()
    {
        return $this->belongsToMany('App\Model\Label');
    }
    
    /**
     * Returns the milestone assigned to this issue
     */
    public function milestone()
    {
        return $this->hasOne('App\Model\Milestone');
    }
    
    /**
     * Returns the project for this issue
     */
    public function project()
    {
        return $this->belongsTo('App\Model\Project');
    }
    
    /**
     * Returns the user that created this issue
     */
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
}
