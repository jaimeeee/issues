<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * Return the issues for this project
     */
    public function issues()
    {
        return $this->hasMany('App\Issue');
    }
    
    /**
     * Returns the organization for this project
     */
    public function organization()
    {
        return $this->belongsTo('App\Organization');
    }
    
    /**
     * Returns the user that created this project
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
