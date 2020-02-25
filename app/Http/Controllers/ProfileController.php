<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profileupdate(Request $request)
    {
        // $this->validate($request,[
        //     'phone_number'=>'int|min:11|max:15',
        //     'email'=>'email|min:10|max:50',
        //     'gender'=>'string',
        //     'description'=>'max:160'
        // ]);
         $id= Auth::user()->id;
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
        $profile->user_id = $id;
        $profile->save();
        session()->flash('success', 'Profile has been updated successfully!');
        return redirect('/dashboard');
    }

    public function userprofile($id){
        $profile = Profile::findorfail($id);
        return view('darshboard', compact('profile'));
    }
//
public function users()
{
    // $profile= User::all();
    $profile = User::all();
    return view('friends',compact('profile'));

}









}
