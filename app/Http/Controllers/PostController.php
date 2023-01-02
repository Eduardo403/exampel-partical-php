<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts= Post::get();


return view('posts.index',['posts'=>$posts]);
    }
    public function show($id)
    {
        $post= Post::findOrFail($id);
        return view("posts.show",['post'=>$post]);
    }

}
