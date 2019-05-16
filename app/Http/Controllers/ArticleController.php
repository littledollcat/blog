<?php 
namespace App\Http\Controllers;

use App\Article;

class ArticleController
{
    public function index()
    {
        // return view('welcome');
        $articles = Article::all();
        return view('article.index', ['articles' => $articles]);
    }
    public function show($id)
    {
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }
    
}
