<?php
namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('pages.home', [
            'topArticles' => Article::with('category', 'tags', 'author')->latest()->take(1)->get(),
            'articles' => Article::with('category', 'tags', 'author')->latest()->take(4)->get(),
            'videos' => Video::latest()->take(4)->get(),
        ]);
    }
}
