<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Returns the assignee for this event
     */
    public function assignee()
    {
        return $this->belongsTo('App\User', 'assignee_id');
    }
    
    /**
     * Returns the assigner for the assignee
     */
    public function assigner()
    {
        return $this->belongsTo('App\User', 'assigner_id');
    }
    
    /**
     * Returns the issue for this event
     */
    public function issue()
    {
        $this->belongsTo('App\Issue');
    }
    
    /**
     * Returns the label for this event
     */
    public function label()
    {
        return $this->belongsTo('App\Label');
    }
    
    /**
     * Returns the milestone assigned to this issue
     */
    public function milestone()
    {
        return $this->belongsTo('App\Milestone');
    }
    
    /**
     * Returns the user that created this event
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
