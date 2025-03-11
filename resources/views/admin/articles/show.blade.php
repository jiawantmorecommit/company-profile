@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-3xl">
    <div class="bg-white rounded-xl shadow-md overflow-hidden p-6 md:p-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">{{ $article->title }}</h1>

        @if($article->image)
        <div class="mb-8 rounded-lg overflow-hidden shadow-lg">
            <img src="{{ asset('images/' . $article->image) }}" alt="{{ $article->title }}" 
                 class="w-full h-64 md:h-96 object-cover mx-auto">
        </div>
        @endif

        <div class="space-y-6 mb-8">
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-lg font-semibold text-gray-700 mb-2">📄Content</p>
                <p class="text-gray-600 leading-relaxed whitespace-pre-line">{{ $article->description }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-lg font-semibold text-gray-700 mb-2">📝 Penulis : {{ $article->author }} </p>
            </div>

        </div>

        <a href="{{ route('admin.articles.index') }}" 
           class="inline-flex items-center px-6 py-3 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Kembali ke Daftar Artikel
        </a>
    </div>
</div>
@endsection