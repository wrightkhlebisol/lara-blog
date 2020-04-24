<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest(5)->get();
        }
        // return $articles;

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $validatedRequest = $this->validateRequest();

        Article::create($validatedRequest);

        return redirect(route('articles.all'));
    }

    public function edit(Article $article)
    {
        //
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article)
    {
        $validatedRequest = $this->validateRequest();
        // Update the resource
        $article->update($validatedRequest);

        return redirect($article->path());
    }

    public function destroy()
    {
        // Delete the resource
    }

    public function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
