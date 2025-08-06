<?php

// app/Http/Controllers/ArticleController.php
namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->where('status', 'PUBLISH')->paginate(6);
        return view('articles.index', [
            'title' => 'Artikel',
            'activePage' => 'articles',
            'articles' => $articles
        ]);
    }

    public function show(Article $article)
    {
        return view('articles.show', [
            'title' => $article->title,
            'activePage' => 'articles',
            'article' => $article
        ]);
    }
}