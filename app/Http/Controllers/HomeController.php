<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
class HomeController extends Controller
{

    public function index() 
    {
        $articles = Article::orderBy('created_at', 'DESC')->get();
        $categories = Category::all();
        return view('home.index', [
            'articles' => $articles,
            'categories' => $categories
        ]);
    }


    public function search(Request $request)
    {
        $articles = Article::where('title', 'like', '%'. $request['search'] .'%')->get();
        $categories = Category::all();
        return view('home.index', [
            'articles' => $articles,
            'categories' => $categories
        ]);
    }
}
