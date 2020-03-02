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
        $friend = User::findorfail($id);
        return view('/dashboard', compact('profile','friend'));
    }


    public function userdashboard($id){
        $friend = User::findorfail($id);
        $profile = Profile::findorfail($id);
        return view('/dashboard', compact('friend','profile'));
    }





}
