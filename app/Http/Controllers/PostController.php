<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
      $post = new Post();
      $post->title = $request->title;
      $post->content = $request->content;
      $post->slug = $request->slug;
      $post->save();
      return redirect('posts');
//        return view('posts.show', [
//            'post' => $post
//        ]);
    }

    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post) {
        $post->update($request->all());

        return redirect('posts');
    }

    public function destroy(Post $post) {
        return redirect('posts');
    }
}
