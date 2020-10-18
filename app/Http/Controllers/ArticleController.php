<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->paginate(5);
        return view('article.index', compact('articles'));
    }

    public function show($slug)
    {
        return view('article.single', compact('slug'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|min:3',
            'subject' => 'required',
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->subject = $request->subject;
        $article->save();

        return redirect('/artikel');
    }
}
