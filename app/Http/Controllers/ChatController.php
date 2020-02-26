<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\User;
class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function chatroom($username)
    {
        $friends=User::where('username',$username);
        return view('chatroom',compact('friends'));
    }
     public function chat()
    {
         $friends=User::all();
        return view('chat',compact('friends'));
    }
<<<<<<< HEAD
//




=======
>>>>>>> 55ee4a6a6e8782ef6324021da8233bfcc97b16d0

}
