<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Andri Firmansyah Putra",
            'username' => "Andri_firmansyh",
            'email' => 'ahsyandri@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("12345678"), // password
            'remember_token' => "ss",
        ]);
        \App\Models\User::factory(5)->create();
        \App\Models\Post::factory(40)->create();



        // User::create([
        //     'name' => 'Adi Firmansyah',
        //     'email' => 'ahsyadri@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Embuh Kih',
            'slug' => 'embuh-kih'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'siduhfuishdfiusdfiugsdyufgisdfsdf avbsudbasdbiausbdiuasd',
        //     'body' => 'oskdhfiuosdhfuihsdiufhiusdhfisdhfiuhsdiufhsiudhfishdfiuhdsfr',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'siduhfuishdfiusdfiugsdyufgisdfsdf avbsudbasdbiausbdiuasd',
        //     'body' => 'oskdhfiuosdhfuihsdiufhiusdhfisdhfiuhsdiufhsiudhfishdfiuhdsfr', 'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'siduhfuishdfiusdfiugsdyufgisdfsdf avbsudbasdbiausbdiuasd',
        //     'body' => 'oskdhfiuosdhfuihsdiufhiusdhfisdhfiuhsdiufhsiudhfishdfiuhdsfr',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}