<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ArticleController extends Controller
{
    // Menampilkan daftar artikel
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }

    // Menampilkan form untuk membuat artikel baru
    public function create()
    {
        return view('articles.create');
    }

    // Menyimpan artikel baru ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'author'      => 'required|string|max:255',
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] = $imageName;
        }

        Article::create($validated);

        return redirect()->route('articles.index')
                         ->with('success', 'Artikel berhasil dibuat.');
    }

    // Menampilkan detail sebuah artikel
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    // Menampilkan form untuk mengedit artikel
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    // Memperbarui artikel di database
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'author'      => 'required|string|max:255',
        ]);

        // Upload gambar jika ada
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validated['image'] = $imageName;
        }

        $article->update($validated);

        return redirect()->route('articles.index')
                         ->with('success', 'Artikel berhasil diperbarui.');
    }

    // Menghapus artikel
    public function destroy(Article $article)
    {

        if($article -> image){
            Storage::disk('public')->delete($article -> image);
        }
        $article->delete();
        return redirect()->route('articles.index')
                         ->with('success', 'Artikel berhasil dihapus.');
    }
}

