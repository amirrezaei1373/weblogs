<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        
        $posts = Post::all();

        $name = request('name');
        return view('posts.index', [
            "posts" => $posts,
            "name" => $name
        ]);

    }

    public function show($id){

        $post = Post::find($id);

        return view('posts.show', ["id" => $id]);
    }


    public function create(){


        return view('posts.create');
    }
}
