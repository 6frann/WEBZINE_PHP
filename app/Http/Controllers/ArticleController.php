<?php
namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::with('category')->get();

        return view('pages.actuality', compact('articles'));
    }
}
