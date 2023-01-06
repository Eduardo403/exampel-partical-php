<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){
        $request->validate([
            'title' =>'required|min:3',
            'descrintion' =>'required|min:3',
            'price' =>'required'
        ]);
        $post= new Post;
        $post->title=$request->input('title');
        $post->descrintion=$request->input('descrintion');
        $post->price=$request->input('price');
        $post->save();

        session()->flash('status','your post has created successfully');
         return redirect()->route('posts.index');
    }

    public function edit(Post $post){
        return view('posts.edit',['post'=> $post]);
    }

    public function update(Request $request , $id ,Post $post){
$request->validate([
            'title' =>'required|min:3',
            'descrintion' =>'required|min:3',
            'price' =>'required'
        ]);
$post= Post::findOrFail($id);
        $post->title=$request->input('title');
        $post->descrintion=$request->input('descrintion');
        $post->price=$request->input('price');
        $post->save();

        session()->flash('status','your post has update successfully');
         return redirect()->route('posts.index');
    }

}
