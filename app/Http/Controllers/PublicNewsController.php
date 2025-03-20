<?php

namespace App\Http\Controllers;

use App\Models\News;

class PublicNewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(6);
        return view('public.news.index', compact('news'));
    }

    public function show(News $news)
    {
        return view('public.news.show', compact('news'));
    }
}