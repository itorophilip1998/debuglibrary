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

        // $profile = $request->all();
        // $profile['user_id'] = auth()->user()->id;

        // Profile::create($profile);

        $profile = Profile::findorfail($id);
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->phone_number = $request->phone_number;
        $profile->email = $request->email;
        $profile->gender = $request->gender;
        $profile->city = $request->city;
        $profile->marital_status = $request->marital_status;
        $profile->field_of_expertise = $request->field_of_expertise;
        $profile->bio = $request->bio;

        $profile['user_id'] = auth()->user()->id;
        $profile->save();

        session()->flash('success', 'Profile has been updated successfully!');
        return redirect('/home');
    }

    public function userprofile(Request $request, Profile $id){
        $profile = Profile::findorfail($id);
        dd($id);
        return view('userprofile', compact('profile'));
    }
}
