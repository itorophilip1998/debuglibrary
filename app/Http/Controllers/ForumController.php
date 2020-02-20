<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class ForumController extends Controller
{
<<<<<<< HEAD
   //return view
   public function forum()
   {
       $posts = Post::OrderBy('created_at', 'desc')->get();

       return view('/forum', compact('posts'));
   }
=======
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function forum()
    {
        return view('/forum');
    }
>>>>>>> bdb451e197561d5fac7304f3985cd2ac34d86653
}
