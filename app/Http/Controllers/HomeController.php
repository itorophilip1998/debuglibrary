<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Auth;
use Auth;
use App\User;
use App\Profile;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/home');
    }



    //
    public function see()
    {
         $fri=User::all();
        return view('chat',compact('fri'));
    }
}
