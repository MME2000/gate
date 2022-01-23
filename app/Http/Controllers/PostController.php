<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        // auth()->logout();
        $posts = Post::all();
        return view('posts',compact('posts'));
    }

    public function edit(Post $post)
    {
        return view('updatePost',compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
    }

    public function destroy(Post $post)
    {
        return $post;
        $post->delete();
    }
}
