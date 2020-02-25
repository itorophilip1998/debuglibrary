<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Image;
use File;
use Auth;
use App\Http\Controllers\chat;

class UserController extends Controller





{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function userprofiler(){
        $user=Auth::user();
        return view('/dashboard', compact('users'));
    }


    public function updateAvatar(Request $request){
        //Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->fit(1200, 1500)->save( public_path('/uploads/avatars/' . $filename ) );
            $user = Auth::user();
            $user->avatar = $filename;

            $user->save();
        }

        return redirect('/dashboard');
    }

//






}
