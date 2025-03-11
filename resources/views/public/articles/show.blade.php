@extends('layouts-guest.navigation')

@section('content')
<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden" data-aos="zoom-in">
            @if($article->image)
            <img src="{{ asset('images/' . $article->image) }}" 
                 alt="{{ $article->title }}" 
                 class="w-full h-64 object-cover">
            @endif
            <div class="p-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $article->title }}</h1>
                <div class="flex items-center text-sm text-gray-500 mb-6">
                    <span class="mr-4">By {{ $article->author }}</span>
                    <span>{{ $article->created_at->format('F j, Y') }}</span>
                </div>
                <div class="prose max-w-none text-gray-700">
                    {!! $article->description !!}
                </div>
                <div class="mt-8">
                    <a href="{{ route('public.articles.index') }}" 
                       class="inline-flex items-center text-blue-600 hover:text-blue-800">
                        ← Back to Articles
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection