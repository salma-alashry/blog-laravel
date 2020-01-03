<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index (){
        return view('posts.index',[
            'posts' => Post::all()
        ]); 
    }
    function create (){
        return view('posts.create'); 
    }
    function store (){
        
        Post::create([
            'title' => request()->title,
            'content' => request()->content
        ]);
        return redirect()->route('posts.index');
    }
    function show($id)
    {
        $post=Post::find($id);
        //dd($post);
        return view('posts.show',['posts'=>$post,'id'=>$id]);   //another way return request()->post;
    }
    function update($id)
    {
        $post=Post::findOrFail($id);
        $post->title = request()->title;
        $post->content = request()->content;
        $post->save();
        return redirect()->route('posts.index');
    }
    function edit($id)
    {
        $post=Post::find($id);
        return view('posts.edit',[
            'posts' => $post
        ]); 
        
    }
    function destroy($id){
        $post =Post::find($id);
        $post->delete();
    }
    
}
