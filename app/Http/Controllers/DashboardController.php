<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Friend;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){
        $id=Auth::user()->id;
        $profile = Profile::findorfail($id);
<<<<<<< HEAD
        return view('/dashboard', compact('profile'));
=======
        $friend = User::findorfail($id);
        return view('/dashboard', compact('profile','friend'));
>>>>>>> 28cb9485b69d05f10489e7a82cb8da7e82dc3002
    }


    public function userdashboard($id){
<<<<<<< HEAD
        $profile = User::findorfail($id);
        return view('/dashboard', compact('profile'));
=======
        $friend = User::findorfail($id);
        $profile = Profile::findorfail($id);
        return view('/dashboard', compact('friend','profile'));
>>>>>>> 28cb9485b69d05f10489e7a82cb8da7e82dc3002
    }





}
