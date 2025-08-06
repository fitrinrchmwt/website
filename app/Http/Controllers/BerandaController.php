<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class BerandaController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('index', [
            'activePage' => 'beranda',
            'title' => 'Beranda - Wedrink',
            'articles' => $articles
        ]);
    }
}
