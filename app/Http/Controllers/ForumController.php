<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class ForumController extends Controller
{
   //return view
   public function forum()
   {
       $posts = Post::OrderBy('created_at', 'desc')->get();

       return view('/forum', compact('posts'));
   }
}
