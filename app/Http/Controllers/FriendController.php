<?php

namespace App\Http\Controllers;
use App\User;
use App\Friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FriendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

<<<<<<< HEAD
    // public function friends()
    // {
    //     return view('/friends');
    // }
=======
    public function friends()
    {
        return view('/friends');
    }
>>>>>>> 55ee4a6a6e8782ef6324021da8233bfcc97b16d0
    public function removefriends($id)
    {
       $frindsdetails=DB::table('friends')->where('friend_id',$id)->delete();
       return redirect()->back();

    }
    public function addfriends($id)
    {
       $frindsdetails=new Friend();
       $frindsdetails->friend_id=$id;
       $frindsdetails->user_id= auth()->user()->id;
       $frindsdetails->save();
       return redirect()->back();

    }


    //start


    public function friends()
    {
         $chats =User::all();
        return view('friends',compact('chats'));
    }











}
