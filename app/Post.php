<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function profile()
    // {
    //     return $this->belongsTo(Profile::class);
    // }

    // public function forum()
    // {
    //     return $this->hasMany(Comment::class);
    // }
}
