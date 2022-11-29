<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'nama' => 'Andri Firmansyah Putra',
        'alamat' => 'Mrisi Tirtinirmolo Kasihan Bantul',
        'img' => 'imgs/allTeam.jpeg'
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Andri Firmansyah Putra',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad voluptatum itaque doloribus optio, obcaecati culpa sit, sint architecto suscipit nemo, fugit incidunt voluptas voluptate deleniti dicta! Corrupti repudiandae quaerat a ab aut nemo, eveniet fugit. Ullam cupiditate, magnam quis molestias praesentium, quisquam deserunt veniam ad rem eum non neque tenetur sed eaque labore perspiciatis, error earum quos. Quasi molestiae eos id nihil minima totam delectus perspiciatis sequi enim repudiandae? Quia sequi doloremque consectetur, expedita sint dolores officia repellat, soluta, nulla perferendis vel laborum ullam non fugiat! Nemo sunt temporibus illo odit alias deleniti, officia explicabo quis? Consequuntur tempora in totam.'
        ], [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Agung Jiwandono',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad voluptatum itaque doloribus optio, obcaecati culpa sit, sint architecto suscipit nemo, fugit incidunt voluptas voluptate deleniti dicta! Corrupti repudiandae quaerat a ab aut nemo, eveniet fugit. Ullam cupiditate, magnam quis molestias praesentium, quisquam deserunt veniam ad rem eum non neque tenetur sed eaque labore perspiciatis, error earum quos. Quasi molestiae eos id nihil minima totam delectus perspiciatis sequi enim repudiandae? Quia sequi doloremque consectetur, expedita sint dolores officia repellat, soluta, nulla perferendis vel laborum ullam non fugiat! Nemo sunt temporibus illo odit alias deleniti, officia explicabo quis? Consequuntur tempora in totam.'
        ],
    ];


    return view('posts', [
        'title' => 'Blog Posts',
        'posts' => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Andri Firmansyah Putra',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad voluptatum itaque doloribus optio, obcaecati culpa sit, sint architecto suscipit nemo, fugit incidunt voluptas voluptate deleniti dicta! Corrupti repudiandae quaerat a ab aut nemo, eveniet fugit. Ullam cupiditate, magnam quis molestias praesentium, quisquam deserunt veniam ad rem eum non neque tenetur sed eaque labore perspiciatis, error earum quos. Quasi molestiae eos id nihil minima totam delectus perspiciatis sequi enim repudiandae? Quia sequi doloremque consectetur, expedita sint dolores officia repellat, soluta, nulla perferendis vel laborum ullam non fugiat! Nemo sunt temporibus illo odit alias deleniti, officia explicabo quis? Consequuntur tempora in totam.'
        ], [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Agung Jiwandono',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad voluptatum itaque doloribus optio, obcaecati culpa sit, sint architecto suscipit nemo, fugit incidunt voluptas voluptate deleniti dicta! Corrupti repudiandae quaerat a ab aut nemo, eveniet fugit. Ullam cupiditate, magnam quis molestias praesentium, quisquam deserunt veniam ad rem eum non neque tenetur sed eaque labore perspiciatis, error earum quos. Quasi molestiae eos id nihil minima totam delectus perspiciatis sequi enim repudiandae? Quia sequi doloremque consectetur, expedita sint dolores officia repellat, soluta, nulla perferendis vel laborum ullam non fugiat! Nemo sunt temporibus illo odit alias deleniti, officia explicabo quis? Consequuntur tempora in totam.'
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }
    // return $slug;
    return view('post', $new_post);
});
