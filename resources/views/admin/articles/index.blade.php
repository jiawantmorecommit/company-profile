@extends('layouts.app')

@section('content')

<header class="bg-white shadow">
    <div class="max-w-7xl font-bold mx-auto py-6 px-4 sm:px-6 lg:px-8">
        Artikel
    </div>
</header>
<div class="container max-w-7xl font-bold mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Daftar Artikel</h1>
        <a href="{{ route('admin.articles.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg transition duration-200">
            + Buat Artikel Baru
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
        {{ session('success') }}
    </div>
    @endif

    @if($articles->isEmpty())
    <div class="bg-gray-100 p-6 rounded-lg text-center text-gray-500">
        Tidak ada artikel yang tersedia.
    </div>
    @else
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($articles as $article)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 bg-gray-100 overflow-hidden">
                @if($article->image)
                <img src="{{ asset('images/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
                @else
                <div class="w-full h-full flex items-center justify-center text-gray-400">
                    Tidak ada gambar
                </div>
                @endif
            </div>

            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $article->title }}</h2>
                <p class="text-sm text-gray-600 mb-4">
                    Oleh: {{ $article->author }}
                </p>

                <div class="flex items-center space-x-2">
                    <a href="{{ route('admin.articles.show', $article->id) }}" class="text-blue-500 hover:text-blue-600 text-sm px-3 py-1.5 border border-blue-500 rounded transition duration-200">
                        Lihat
                    </a>
                    <a href="{{ route('admin.articles.edit', $article->id) }}" class="text-yellow-500 hover:text-yellow-600 text-sm px-3 py-1.5 border border-yellow-500 rounded transition duration-200">
                        Edit
                    </a>
                    <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-600 text-sm px-3 py-1.5 border border-red-500 rounded transition duration-200" onclick="return confirm('Yakin ingin menghapus artikel ini?')">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection