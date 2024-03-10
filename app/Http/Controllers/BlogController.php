<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogController
{
    public function show()
    {
        $articles = Article::latest()->take(5)->get();

        return view('blog', [
            'articles' => $articles
        ]);
    }
}
