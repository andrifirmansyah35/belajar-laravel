<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Model
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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
        'active' => 'About',
        'nama' => 'Andri Firmansyah Putra',
        'alamat' => 'Mrisi Tirtinirmolo Kasihan Bantul',
        'img' => 'imgs/allTeam.jpeg'
    ]);
});

// Route::get('/blog', function () {
//     return view('posts', [
//         'title' => 'Blo8888888888888888888888*******         bn=bnbnbnbnbnbnbnbnbnbnbnbnbnbnbnbnbnnnnnnng Posts',
//         'posts' => Post::all()
//     ]);
// });

// Route::get('posts/{slug}', function ($slug) {    //5.1 diganti dengan model terbaru dan model fugsi terbvaru ============================================

//     $blog_posts = [
//         [
//             'title' => 'Judul Post Pertama',
//             'slug' => 'judul-post-pertama',
//             'author' => 'Andri Firmansyah Putra',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad voluptatum itaque doloribus optio, obcaecati culpa sit, sint architecto suscipit nemo, fugit incidunt voluptas voluptate deleniti dicta! Corrupti repudiandae quaerat a ab aut nemo, eveniet fugit. Ullam cupiditate, magnam quis molestias praesentium, quisquam deserunt veniam ad rem eum non neque tenetur sed eaque labore perspiciatis, error earum quos. Quasi molestiae eos id nihil minima totam delectus perspiciatis sequi enim repudiandae? Quia sequi doloremque consectetur, expedita sint dolores officia repellat, soluta, nulla perferendis vel laborum ullam non fugiat! Nemo sunt temporibus illo odit alias deleniti, officia explicabo quis? Consequuntur tempora in totam.'
//         ], [
//             'title' => 'Judul Post Kedua',
//             'slug' => 'judul-post-kedua',
//             'author' => 'Agung Jiwandono',01/1112121212121
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad voluptatum itaque doloribus optio, obcaecati culpa sit, sint architecto suscipit nemo, fugit incidunt voluptas voluptate deleniti dicta! Corrupti repudiandae quaerat a ab aut nemo, eveniet fugit. Ullam cupiditate, magnam quis molestias praesentium, quisquam deserunt veniam ad rem eum non neque tenetur sed eaque labore perspiciatis, error earum quos. Quasi molestiae eos id nihil minima totam delectus perspiciatis sequi enim repudiandae? Quia sequi doloremque consectetur, expedita sint dolores officia repellat, soluta, nulla perferendis vel laborum ullam non fugiat! Nemo sunt temporibus illo odit alias deleniti, officia explicabo quis? Consequuntur tempora in totam.'
//         ],
//     ];

//     $new_post = [];
//     foreach ($blog_posts as $post) {
//         if ($post['slug'] === $slug) {
//             $new_post = $post;
//         }
//     }
//     // return $slug;
//     return view('post', $new_post);
// });


// 5.2 membuat baru route dengan monggunakan model
// Route::get('posts/{slug}', function ($slug) {
// $new_post = Post::find($slug);
// // 5.3 membuat function find pada model Poset==========================
// return view('post', $new_post);
// });
// 5.6 tidak digunakan karena akan menggunakan controller ========================================


// 5.6 menggunakan controller ===========================================
Route::get('/blog', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'Categories', 
        // 'categories' => Category::all()
        'categories' => Category::all()

    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => 'All Posts Of Category : '.$category->name,
        'active' => 'Categories',
        'posts' => $category->posts->load('category','author'),
    ]);
});


Route::get('author/{user:name}', function (User $user) {
    return view('posts', [
        'title' => 'Posts by : '.$user->name,
        'active' => 'blog Posts',
        // 'posts' => $user->posts,
        'posts' => $user->posts->load('author','category'),
    ]);
});