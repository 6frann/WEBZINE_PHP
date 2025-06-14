<?php
namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::with('author')
        ->orderBy('created_at', 'desc')
        ->paginate(6);

        return view('pages.actuality', compact('articles'));
    }

    public function show($slug) {
        $article = Article::with('category','tags','author')
            ->where('slug', $slug)->first();

        $relatedArticles = Article::with('author')
            ->where('category_id', $article->category_id)
            ->where('id', '!=', $article->id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        return view('pages.articleDetail', compact('article', 'relatedArticles'));
    }
}
