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

    public function update(){
        return view('posts.edit');
    }

    // use api for read all post AND PAGINATE 2 PER PAGE

    public function post(){
        $post = Post::paginate(2);
        return response()->json($post, 200);
    }
    // READ QUERY BY ID FUNCTIONS

    public function postById($id){
        $post = Post::find($id);
        if(is_null($post)){
            return response()->json("Record is not find", 404);   
        }
        return response()->json(Post::find($id), 200);
    }

    // CREATE QUERY FUNCTIONS

    public function postSave(Request $request){
        $post = Post::Create($request->all());
        return response()->json($post, 201);
    }

    // EDIT QUERY FUNCTIONS

    public function postUpdate(Request $request, $id){
        $post = Post::find($id);
        if(is_null($post)){
            return response()->json("Record is not find", 404);
        }
        $post->update($request->all());
        return response()->json($post, 200);
    }
    // DELETE QUERY FUNCTIONS

    public function postDelete(Request $request, $id){
        $post = Post::find($id);
        if(is_null($post)){
            return response()->json("Record is not find", 404);
        }
        $post->delete();
        return response()->json(null, 204);
    
    }

    // SEARCH BY TITLE DESCRIPTION & CONTENT
    public function postSearch($q){
        $post = Post::where('title', 'LIKE', '%'.$q.'%')
                   ->orWhere('description','LIKE', '%'.$q.'%')
                   ->orWhere('content','LIKE', '%'.$q.'%')->get();
        return $post;
    }
}
