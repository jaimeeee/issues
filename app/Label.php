<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Label extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    
    /**
     * Returns the events for this label
     */
    public function events()
    {
        return $this->hasMany('App\Event');
    }
    
    /**
     * Returns the issues with this label
     */
    public function issues()
    {
        return $this->belongsToMany('App\Issue');
    }
    
    /**
     * Returns the project for this label
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
