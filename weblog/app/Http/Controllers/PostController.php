<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = [
            ["type" => "special", "crust" => "thin","price" => 50],
            ["type" => "mix", "crust" => "amir","price" => 330],
            ["type" => "meat", "crust" => "garlic","price" => 40]    
        ];
    
        $name = request('name');
        return view('posts', [
            "posts" => $posts,
            "name" => $name
        ]);

    }

    public function show($id){
        return view('details', ["id" => $id]);
    }
}
