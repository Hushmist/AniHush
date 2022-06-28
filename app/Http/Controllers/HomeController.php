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
}
