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
        return $this->belongsTo('App\Model\User', 'assignee_id');
    }
    
    /**
     * Returns the assigner for the assignee
     */
    public function assigner()
    {
        return $this->belongsTo('App\Model\User', 'assigner_id');
    }
    
    /**
     * Returns the issue for this event
     */
    public function issue()
    {
        $this->belongsTo('App\Model\Issue');
    }
    
    /**
     * Returns the label for this event
     */
    public function label()
    {
        return $this->belongsTo('App\Model\Label');
    }
    
    /**
     * Returns the milestone assigned to this issue
     */
    public function milestone()
    {
        return $this->belongsTo('App\Model\Milestone');
    }
    
    /**
     * Returns the user that created this event
     */
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
}
