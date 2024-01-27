<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('post.index', [
            'posts' => $posts,
        ]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('post.show', [
            'post' => $post,
        ]);
    }
}
