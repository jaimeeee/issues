<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Returns the issue where this comment is posted
     */
    public function issue()
    {
        $this->belongsTo('App\Issue');
    }
    
    /**
     * Returns the author of the comment
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
