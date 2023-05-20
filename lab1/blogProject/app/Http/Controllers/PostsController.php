<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //

    function View(){
        return view("posts.viewpost");
    }

    function edit(){
        return view('posts.edit');
    }
    function delete(){
        return view('posts.edit');
    }
    function add(){
        return view('posts.add');
    }

    function postsIndex(){
        $posts = [
            ["title"=>'posts1', 'createdBy'=>'Ibrahim', 'description'=>"p1 description"],
            ["title"=>'posts2', 'createdBy'=>'Ahmed', 'description'=>"p2 description"],
            ["title"=>'posts3', 'createdBy'=>'mohammed', 'description'=>"p3 description"]

        ];

        return view("posts.posts_index", ['posts'=>$posts]);
    }
}
