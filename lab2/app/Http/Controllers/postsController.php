<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postsController extends Controller
{
    function index()
    {
        $posts = Post::where('id', '>', 0)->paginate(5);
        // $posts = Post::all();
        return view("posts.index" , ['posts'=>$posts]);
    }

    function showPost($id)
    {
        $post = Post::where('id', $id)->first();
        if ($post) {
            return view("posts.view", ['post' => $post]);
        }
    }

    function create()
    {
        return view('posts/add');
    }
    function savePost(){
        // dd(\request()->all());
        $post_info= request()->all();
        $post = new Post();
        $post->title= $post_info['title'];
        $post->created_by = $post_info['created_by'];
        $post->description	=$post_info['description'];
        $post->save();
        return to_route("posts.index");
    }

    function edit($id){
        // dd($id);
        $post = Post::where('id', $id)->first();
        return view('posts.edit',['post'=> $post]);
    }

    function updetpost($id){
        $post_info= request()->all();
        $post = Post::where('id', $id)->first();
        $post->title= $post_info['title'];
        $post->created_by = $post_info['created_by'];
        $post->description	=$post_info['description'];
        $post->save();
        return to_route("posts.index");
        
    }


    
    public function deletePost($id){
      
        $post = Post::find($id);
        if ($post) {
            $post->delete();
        }
        return to_route("posts.index");
    }
}
