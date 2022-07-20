<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * List Posts
     */
    public function index()
    {
        $posts = Post::all(); // retrive record from database
        return view('posts.index', [
            'posts' => $posts,
            'author' => 'Puthea',
        ]);
    }
}
