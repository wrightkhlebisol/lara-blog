<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        $articles = Article::paginate(5);
        // return $articles;

        return view('articles.index', ['articles' => $articles]);
    }

    public function show($articleId)
    {
        $article = Article::find($articleId);

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }

    public function edit()
    {
        //
        return view('articles.edit');
    }

    public function update()
    {
        // Update the resource
    }

    public function destroy()
    {
        // Delete the resource
    }
}
