<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        $articles = $category->articles()
        ->with('author')
        ->orderBy('created_at', 'desc')
        ->paginate(6);
        $categories = Category::all();
        
        return view('categories.show', compact('category', 'articles', 'categories'));
    }
}
