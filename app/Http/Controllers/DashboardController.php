<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashindex(Request $request, Profile $id){
        if (auth()->check()){
        $profile = Profile::where('id',$id)->first();
        // dd($id);
        }
        return view('/dashindex', compact('profile'));
    }

    
}
