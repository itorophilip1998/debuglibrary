<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'phone_number', 'email', 'gender', 'city', 'marital_status', 'field_of_expertise', 'bio'
    ];


    /**
     *  Get the user that owns the profile.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
