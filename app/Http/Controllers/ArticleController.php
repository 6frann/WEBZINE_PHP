<?php
namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::with('author')->paginate(6);

        return view('pages.actuality', compact('articles'));
    }

    public function show($slug) {
        $article = Article::with('category','tags','author')
            ->where('slug', $slug)->first();
        return view('pages.articleDetail', compact('article'));
    }
}
