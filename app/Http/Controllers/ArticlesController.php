<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ArticlesController extends Controller
{
    public function create()
    {
        return view('articles-create');
    }

    public function store(Request $request)
    {
        $article = new Article([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'link' => $request->get('link'),
            'image' => $request->get('image'),
            'date' => $request->get('date')
        ]);
        $article->user()->associate(Auth::user());
        $article->save();

        return Redirect::route('welcome');
    }

    public function show()
    {
        $articles = DB::table('articles')->paginate(10);
        $comments = DB::table('comments')->paginate(10);
        return view('welcome', ['articles' => $articles, 'comments' => $comments]);
    }
}
