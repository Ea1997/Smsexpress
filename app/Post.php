<?php

namespace App;
use App\Rent;
use App\Comment;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function item(){
        return $this->belongsTo(Item::class);
    }

}
