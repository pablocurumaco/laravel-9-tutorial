<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
           'except' => ['index', 'show']
        ]);
    }

    public function index(): view
    {
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function create(): view
    {
        return view('posts.create', ['post' => new Post()]);
    }

    public function store(SavePostRequest $request): RedirectResponse
    {
        Post::create($request->validated());

        return to_route('posts.index')->with('status', 'Post created!');
    }

    public function show(Post $post): view
    {
        return view('posts.show', ['post' => $post]);
    }

    public function edit(Post $post): view
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return to_route('posts.show', $post)->with('status', 'Post updated!');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();

        return to_route('posts.index')->with('status', 'Post deleted!');
    }
}
