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
        return $this->hasMany('App\Model\Project');
    }
}
