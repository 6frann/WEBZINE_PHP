<?php
namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('pages.home', [
            'topArticles' => Article::with('category')->latest()->take(3)->get(),
            'articles' => Article::with('category', 'author')->latest()->skip(3)->take(4)->get(),
            'videos' => Video::latest()->take(4)->get(),
        ]);
    }
    public function search(Request $request){
        $query = $request->input('query');

        $articles = Article::where('title', 'like', "%{$query}%")
            ->orWhere('content', 'like', "%{$query}%")
            ->get();

        return view('pages.search', compact('articles','query'));
    }
}
