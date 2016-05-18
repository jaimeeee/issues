<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    /**
     * Returns the events for this issue
     */
    public function events()
    {
        return $this->hasMany('App\Event');
    }
    
    /**
     * Returns the issues for this milestone
     */
    public function issues()
    {
        return $this->hasMany('App\Issue');
    }
    
    /**
     * Returns the project for this milestone
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
    
    /**
     * Returns the user that created this milestone
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
