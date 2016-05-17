<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    /**
     * Returns the events for this label
     */
    public function events()
    {
        return $this->hasMany('App\Model\Event');
    }
    
    /**
     * Returns the issues with this label
     */
    public function issues()
    {
        return $this->belongsToMany('App\Model\Issue');
    }
    
    /**
     * Returns the project for this label
     */
    public function project()
    {
        return $this->belongsTo('App\Model\Project');
    }
}
