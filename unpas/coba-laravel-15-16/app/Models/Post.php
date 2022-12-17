<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    // public function scopeFilter($query){
    //     if(request('search')){
    //         return $query->where('title','like','%'. request('search') .'%')
    //         ->orWhere('body','like','%'.request('search').'%');
    //     }
    // }

    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title','like','%'. $filters['search'] .'%')
        //     ->orWhere('body','like','%'.$filters['search'].'%');
        // }

        // $query->when($filters['search']) ?? false, function($query,$search) {
        //     return $query->where('title','like','%'. $search .'%')
        //     ->orWhere('body','like','%'.$search.'%');
        // });

        // code diata tidak bisa digunakan karena kita tidak menggunakan php 7 ---------------------
        $query->when(isset($filters['search']) ? $filters['search'] : false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when(isset($filters['category']) ? $filters['category'] : false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                return $query->where('slug', $category);
            });
        });

        $query->when(isset($filters['author']) ? $filters['author'] : false, fn ($query, $author) =>
        $query->whereHas(
            'author',
            fn ($query) =>
            $query->where('name',$author)
        ));

        // $query->when(isset($filters['author']) ? $filters['author'] : false, function ($query, $author) {
        //     return $query->whereHas('author', function ($query) use ($author) {
        //         return $query->where('name', $author);
        //     });
        // });
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function user()              //cek user_id   kita ganti dengannama lain
    {
        return $this->belongsTo(user::class);
    }

    public function author()              //cek user_id   kita ganti dengannama lain
    {
        return $this->belongsTo(user::class, 'user_id');
    }
}
