<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::where('published_at', '!=', null)
            ->orderBy('published_at', 'desc')
            ->paginate(10);
        return view('blog', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('blog-show', compact('article'));
    }
}