@extends('layouts.app')

@section('title', 'News Detail')

@section('content')
<header class="bg-white shadow">
    <div class="max-w-7xl font-bold mx-auto py-6 px-4 sm:px-6 lg:px-8">
        Detail Berita
    </div>
</header>
<div class="container max-w-7xl font-bold mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        @if($news->image)
        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full h-64 object-cover">
        @endif
        <div class="p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $news->title }}</h1>
            <p class="text-gray-600 mb-4">{{ $news->content }}</p>
            <div class="flex justify-between items-center">
                <span class="text-sm text-gray-500">Published by: {{ $news->publisher }}</span>
                <span class="text-sm text-gray-500">{{ $news->created_at->format('d M Y') }}</span>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <a href="{{ route('news.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition duration-300">Back to List</a>
    </div>
</div>
@endsection