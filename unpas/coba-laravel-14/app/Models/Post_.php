<?php

namespace App\Models;

class Post
{
    private static $blog_post =  [
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

    public static function all()
    {
        // return self::$blog_post; 5.5 tidak digunakan karena menggunakan collection
        return collect(self::$blog_post);
    }

    // 5.4 Function find model post ======================================== 
    public static function find($slug)
    {
        // $posts = self::$blog_post;   //5.5 tidak digunakan agar menggunakan post yang sudah colectiuon(function all)
        // $new_post = [];
        // foreach ($posts as $post) {
        //     if ($post['slug'] === $slug) {
        //         $new_post = $post;
        //     }
        // }

        $posts = static::all();
        $new_post = $posts->firstWhere('slug', $slug);
        return $new_post;
    }
}

$collect  = collect([1, 2, 3]);
