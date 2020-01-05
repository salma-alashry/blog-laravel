<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index(){
        return PostResource::collection(Post::paginate(3)); //return array of objects
        //return new UserCollection(User::paginate());
    }
    public function show($id)
    {
        $post = Post::find($id);
        return new PostResource($post); //return one object 
        //return new UserCollection(User::paginate());
    }
    function store (StorePostRequest $request){
        
       $post= Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $request->user()->id
        ]);
        return new PostResource($post);
    }
}
