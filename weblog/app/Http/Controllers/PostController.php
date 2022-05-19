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

        $post = Post::findOrFail($id);

        return view('posts.show', ["post" => $post]);
    }


    public function create(){


        return view('posts.create');
    }

    public function store(){

        $post = new Post();
        $post->title = request('title');
        $post->description = request('description');
        $post->content = request('content');

        $post->save();

        return redirect('/')->with('mssg', 'thanx for create a post');
    }

    public function destroy($id){

        $post = Post::findOrFail($id);

        $post->delete();

        return redirect('/posts');
    }

    
}
