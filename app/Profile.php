<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'phone_number', 'email', 'gender', 'city', 'status', 'description',
    ];

    /**
     *  Get the user that owns the profile.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function forum()
    {
        return $this->hasmany(forum::class);
    }
}
