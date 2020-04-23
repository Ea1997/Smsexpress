<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;

use App\Categorie;

use Illuminate\Http\Request;



class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
$elements=Categorie::all();

        return view('items.create',compact('elements'));

    }
    public function store()
    {
        $data=request()->validate(  [
            'Titre'=>'required',
            'categorie'=>'required',
            'sous_titre'=>'required',
            'description'=>'required',
            'price'=>'required',

        ]);
        $imagepath="teste teste";

        auth()->user()->item()->create([
            'Titre'=>$data['Titre'],
            'categorie'=>$data['categorie'],
            'image'=>$imagepath,

        ]);


        return redirect('/');
    }
}
