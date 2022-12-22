<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{

    // public function index()
    // {
    //     $posts = Post::latest();
        
    //     return view('posts', [
    //         'title' => 'All Posts',
    //         'active' => 'Blog Posts',
    //         'posts' => $posts->filter()->get()
    //     ]);
    // }

    public function index()
    {

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title = ' in '.$category->name;
        }

        if(request('author')){
            $author = User::firstWhere('name',request('author'));
            $title = ' in '.$author->name;
        }
        $posts = Post::latest();
        
        return view('posts', [
            'title' => 'All Posts'.$title,
            'active' => 'Blog Posts',
            'posts' => $posts->filter(request(['search','category','author']))->paginate(4)->withQueryString()
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
            'active' => 'Blog Posts',
            'title' => 'Single post',
            'post' => $post
        ]); 

        return $post;
    }
}