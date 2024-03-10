<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('blog', [
            'articles' => Article::latest()->get()
        ]);
    }
    public function show(Article $article)
    {
        return view('articles', ['articles' => $article]);
    }

    public function create() {
        return view('articles.create');
    }
    public function store(Request $request) {
        // validation
        Article::create($this->validateArticle($request));

        return redirect('/articles');
    }
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }
    public function update(Article $article, Request $request) {

        $article->update($this->validateArticle($request));

        return redirect($article->path());
    }
    public function destroy($id) {
        Article::findOrFail($id)->delete();

        return redirect('/articles');
    }

    /**
     * @return array
     */
    public function validateArticle(Request $request): array
    {
        return Validator::make($request->all(), [
            'title' => 'required|unique:articles|max:255',
            'excerpt' => 'required',
            'body' => 'required',
        ])->validate();
    }
}
