<?php

namespace App\Http\Controllers;

use App\Item;
use \App\Categorie;
use Illuminate\Http\Request;
use App\Post;

class IndexController extends Controller
{
    public function home()
    {
        $posts=Item::all();
        $testes=Categorie::all();
        return view('welcome',compact('posts','testes'));
    }
}
