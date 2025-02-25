<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
            'publisher' => 'required|max:255'
        ]);

        if($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('news-images', 'public');
        }

        News::create($validated);

        return redirect()->route('news.index')->with('success', 'News created successfully!');
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
            'publisher' => 'required|max:255'
        ]);

        if($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $validated['image'] = $request->file('image')->store('news-images', 'public');
        }

        $news->update($validated);

        return redirect()->route('news.index')->with('success', 'News updated successfully!');
    }

    public function destroy(News $news)
    {
        if($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();
        return redirect()->route('news.index')->with('success', 'News deleted successfully!');
    }
}
