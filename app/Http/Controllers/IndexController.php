<?php

namespace App\Http\Controllers;

use App\Models\Post;

class IndexController extends Controller
{
    public function index()
    {
        $title = 'Accueil';

        $index_news = Post::limit(8)->orderBy('created_at', 'desc')->get();

        return view('index', [
            'title' => $title,
            'index_news' => $index_news,
        ]);
    }
}
