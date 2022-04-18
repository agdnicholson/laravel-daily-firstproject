<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
        return view('post', compact(var_name: 'post'));
    }
}
