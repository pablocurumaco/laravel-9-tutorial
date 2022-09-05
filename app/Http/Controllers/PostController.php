<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): view
    {
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function create(): view
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        session()->flash('status', 'Post created!');

        return to_route('posts.index');
    }

    public function show(Post $post_id): view
    {
        return view('posts.show', ['post' => $post_id]);
    }
}
