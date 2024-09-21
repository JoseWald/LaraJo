<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;


use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function create(){
        return  view('posts.create');
    }

    public function store(){
        $data=request()->validate([
            'caption' => 'required',
            'image' => 'required | image' ,

        ]);

        $imagePath=request('image')->store('uploads','public');

         // Redimensionne l'image
         $image = Image::make(public_path("storage/{$imagePath}"));
         $image->resize(800, 600); // Largeur, Hauteur
 
         // Sauvegarde l'image redimensionnée
         $image->save();
        auth()->user()->posts()->create([
            'caption'=>$data['caption'],
            'image'=>$imagePath
        ]);
 
        return redirect('/profile/'.auth()->user()->id);
    }
}
