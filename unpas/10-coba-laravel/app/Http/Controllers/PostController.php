<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        return view('posts', [
            'title' => 'Blog Posts',
            // 'posts' => Post::all()
            'posts' => Post::latest()->get()
        ]);
    }

    // public function show($id)       // 7.0   digantid dengan route builder --------------------------------------------s
    // {
    //     $new_post = Post::find($id);
    //     // return view('post', [
    //     //     'title' => 'Single post',
    //     //     'post' => $new_post
    //     // ]);
    //     return $new_post;
    // }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single post',
            'post' => $post
        ]);

        return $post;
    }
}