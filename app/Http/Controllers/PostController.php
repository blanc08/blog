<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts', [
            "title" => "All Post",
            "posts" => Post::with(['category'])->latest()->get()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return Inertia::render('Post/Show', [
            "title" => "Post - " . $post->title,
            "post" => $post
        ]);
    }
}
