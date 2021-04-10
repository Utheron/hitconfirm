<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $title = "News";
        
        $posts = Post::all();
        
        return view('posts.index', [
            'title' => $title,
            'posts' => $posts,
        ]);
    }
        
    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */
    public function show($post)
    {
        $post = Post::where('slug', $post)->first();
        $title = $post->name;
        
        return view('posts.single', [
            'title' => $title,
            'post' => $post,
        ]);
    }
}
        