<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
class PostsController extends Controller
{
    public function create(){
        return  view('posts.create');
    }

    public function store(){
        $data=request()->validate([
            'caption' => 'required',
            'image' => 'required | image' ,

        ]);

        auth()->user()->posts()->create($data);
 
        dd(request()->all());
    }
}
