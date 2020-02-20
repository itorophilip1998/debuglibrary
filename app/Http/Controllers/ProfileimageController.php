<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profileimage;
// use Auth;

class ProfileimageController extends Controller
{
    public function userprofile(){
        $profileimage = Profileimage::all();
        return view('userprofile', compact('profileimage'));
    }
}
