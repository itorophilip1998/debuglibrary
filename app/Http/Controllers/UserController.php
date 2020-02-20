<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use File;
use Auth;

class UserController extends Controller
{
    public function userprofiler(){
        $user=Auth::user();
        return view('dashindex', compact('user'));
    }

    // public function updateavatar(Request $request){
    //     //upload user avatar

    //     if($request hasFile('avatar')){
    //         $avatar = $request->file('avatar');
    //         $filename = time() . '.' . $avatar->getClientOriginalExtension();
    //         Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename ) );

    //         $user = Auth::user();
    //         $user->avatar = $filename;
    //         $user->save();
    //     }
    //     return view('/userprofile', array('user'=>Auth::user()));
    // }

    public function updateAvatar(Request $request){
        //Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(200, 200)->save( public_path('/uploads/avatars/' . $filename ) );
            $user = Auth::user();
            $user->avatar = $filename;

            $user->save();
        }

        return view('dashindex', array('user' => Auth::user()));
    }
}
