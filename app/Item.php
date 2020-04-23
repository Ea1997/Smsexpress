<?php

namespace App;
use App\Rent;
use App\Comment;
use App\Post;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function post(){
        return $this->belongsToMany(Post::class);
    }
    public function categorie(){
        return $this->hasOne(Post::class);
    }
}
