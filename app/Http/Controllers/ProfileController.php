<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'first_name'=>'string|min:3|max:20',
            'last_name'=>'string|min:3|max:20',
            'phone_number'=>'int|min:11|max:20',
            'email'=>'email|min:10|max:50',
            'gender'=>'string',
            'city',
            'status',
            'description',
        ]);

         

        $profile = Profile::findorfail($id);
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->phone_number = $request->phone_number;
        $profile->email = $request->email;
        $profile->gender = $request->gender;
        $profile->city = $request->city;
        $profile->status = $request->status;
        $profile->description = $request->description;

        $profile['user_id'] = auth()->user()->id;
        $profile->save();

        session()->flash('success', 'Profile has been updated successfully!');
        return redirect('/dashboard');
    }
}
