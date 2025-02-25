@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Edit Artikel</h1>

    {{-- Tampilkan error validasi, jika ada --}}
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- "Card" container untuk form --}}
    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Judul Artikel --}}
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-semibold mb-2">
                    Judul Artikel
                </label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    value="{{ $article->title }}"
                    required
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 px-3 py-2"
                >
            </div>

            {{-- Gambar Artikel --}}
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-semibold mb-2">
                    Gambar Artikel
                </label>
                @if($article->image)
                    <div class="mb-3">
                        <img 
                            src="{{ asset('images/' . $article->image) }}" 
                            alt="{{ $article->title }}" 
                            class="h-24 w-auto rounded"
                        >
                    </div>
                @endif
                <input 
                    type="file" 
                    name="image" 
                    id="image"
                    class="block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4
                           file:rounded file:border-0
                           file:text-sm file:font-semibold
                           file:bg-indigo-50 file:text-indigo-700
                           hover:file:bg-indigo-100"
                >
                <p class="text-sm text-gray-500 mt-1">
                    Kosongkan jika tidak ingin mengubah gambar.
                </p>
            </div>

            {{-- Deskripsi --}}
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-semibold mb-2">
                    Deskripsi
                </label>
                <textarea 
                    name="description" 
                    id="description" 
                    rows="5"
                    required
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 px-3 py-2"
                >{{ $article->description }}</textarea>
            </div>

            {{-- Nama Penulis --}}
            <div class="mb-4">
                <label for="author" class="block text-gray-700 font-semibold mb-2">
                    Nama Penulis
                </label>
                <input 
                    type="text" 
                    name="author" 
                    id="author" 
                    value="{{ $article->author }}"
                    required
                    class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 px-3 py-2"
                >
            </div>

            {{-- Tombol Submit --}}
            <div class="flex justify-end">
                <button 
                    type="submit" 
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-4 py-2 rounded-md transition-colors"
                >
                    Perbarui Artikel
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
