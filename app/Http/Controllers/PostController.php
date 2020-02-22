<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //create post in forum
    public function store(Request $request)
    {
        $this->validate($request, [
               'title' => 'string|required',
               'body' => 'text|required',
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $request->user()->post()->save();
        session()->flash('success', 'Posted successfilly!');

        return redirect()->back();
    }

    // update post in forum
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'string|required',
            'body' => 'string|required',
     ]);
        $post = Post::findorfail($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        session()->flash('success', 'Successfully Edited!');

        return redirect()->back();
    }

    public function delete($id)
    {
        $post = Post::findorfail($id);
        if (auth()->user() == $post->user) {
            $post->delete();
            session()->flash('success', 'Successfully Deleted!');

            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
