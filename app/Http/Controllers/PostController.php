<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){
        $posts = Post::paginate(20);

        return view("posts.index", ["posts" => $posts]);
    }

    public function post(Request $request){
        $this->validate($request, [
            "content" => "required"
        ]);
        /*
        Post::create([
            "user_id" => auth()->user()->id,
            "content" => $request->content
        ]);*/

        auth()->user()->posts()->create($request->only("content"));

        return back()->with("status", "Posted");
    }
}
