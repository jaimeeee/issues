<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    /**
     * Return the projects for this organization
     */
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
    
    public function scopeAllFields($query, $search)
    {
        return $query->where('name', 'like', '%'.$search.'%')->orWhere('company', 'like', '%'.$search.'%');
    }
}
