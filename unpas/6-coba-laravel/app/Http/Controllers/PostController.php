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
            'posts' => Post::all()
        ]);
    }

    public function show($slug)
    {
        $new_post = Post::find($slug);
        // 5.3 membuat function find pada model Poset==========================
        return view('post', [
            'title' => 'Single post',
            'post' => $new_post
        ]);
    }
}
