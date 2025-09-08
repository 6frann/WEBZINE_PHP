<?php
namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::with('author')
        ->orderBy('created_at', 'desc')
        ->paginate(6);
        $categories = Category::all();
        
        return view('pages.articles.index', compact('articles', 'categories'));
    }

    public function show($slug) {
        $article = Article::with('category','tags','author')
            ->where('slug', $slug)->first();

        $relatedArticles = Article::with('author', 'category')
            ->where('category_id', $article->category_id)
            ->where('id', '!=', $article->id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        return view('pages.articles.show', compact('article', 'relatedArticles'));
    }
}
