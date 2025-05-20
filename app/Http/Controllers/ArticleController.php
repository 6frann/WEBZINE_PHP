<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('test', compact('articles'));
    }

    public function show($slug) {
        $article = Article::with('category','tags','author')
            ->where('slug', $slug)->first();
        return view('test2', compact('article'));
    }
}
