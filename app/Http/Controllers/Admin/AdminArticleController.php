<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class AdminArticleController extends Controller
{
    /**
     * Display a listing of articles
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show form for creating new article
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created article
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string|max:100',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['published_at'] = now();

        Article::create($validated);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Artikel berhasil dibuat.');
    }

    /**
     * Show edit form
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update article
     */
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string|max:100',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        $article->update($validated);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Artikel berhasil diperbarui.');
    }

    /**
     * Delete article
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')
            ->with('success', 'Artikel berhasil dihapus.');
    }
}