<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): view
    {
        $posts = [
            'First post',
            'Second post',
            'Third post',
            'Fourth post'
        ];

        return view('blog', ['posts' => $posts]);
    }
}
