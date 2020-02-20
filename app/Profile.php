<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
<<<<<<< HEAD
        'first_name', 'last_name', 'phone_number', 'email', 'gender', 'city', 'marital_status', 'field_of_expertise', 'bio'
=======
        'first_name', 'last_name', 'phone_number', 'email', 'gender', 'city', 'status', 'description',
>>>>>>> 976dcfa5bfd8a39a1998c87f4c7c86c016ec474e
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
