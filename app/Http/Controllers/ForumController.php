<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class ForumController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }
     //return view
   public function forum()
   {
       $posts = Post::OrderBy('created_at', 'desc')->get();

       return view('/forum', compact('posts'));
   }
     
}
