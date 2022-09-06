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
        $request->validate([
            'title' => ['required'],
            'body' => ['required']
        ]);

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

    public function edit(Post $post_id): view
    {
        return view('posts.edit', ['post' => $post_id]);
    }

    public function update(Request $request, Post $post_id)
    {
        $request->validate([
            'title' => ['required'],
            'body' => ['required']
        ]);

        $post = $post_id;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        session()->flash('status', 'Post updated!');

        return to_route('posts.show', $post);
    }
}
