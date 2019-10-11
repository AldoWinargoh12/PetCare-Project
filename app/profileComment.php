<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profileComment extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
