<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];

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
        return $this->belongsTo(user::class,'user_id');
    }
}