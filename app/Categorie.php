<?php

namespace App;
use App\Comment;
use App\Rent;
use App\Post;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function item(){
        return $this->belongsToMany(Item::class);
    }
}
