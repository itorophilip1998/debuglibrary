<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Auth;
use Auth;
use App\User;
use App\Profile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, Profile $id)
    {
        $profile = Profile::find($id);
        // Auth::user()->user()->id;

        // dd($request->user()->id);
        return view('/home', compact('profile'));
    }
}
