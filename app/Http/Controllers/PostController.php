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

        return view('blog', ['posts' => $posts]);
    }
}
