<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profilePost extends Model
{
    public function user()
    {
        //the profilePost belongs to a user.
        return $this->belongsTo(User::class);
        
    }
    public function profileComments()
    {
        return $this->morphMany(profileComment::class,'commentable')->whereNull('parent_id');
    }

/*
this is a relationship between the profilePost and profileComment model.
we assign null to parent_id to later use it for replies to the given post. 
*/






}