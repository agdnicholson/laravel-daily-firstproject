<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::when(request(key: 'category_id'), function ($query) {
                $query->where('category_id', request(key: 'category_id'));
            })
            ->latest()
            ->get();

        return view('index', [
            'categories' => $categories,
            'posts' => $posts
        ]);
    }
}
