@extends('layouts-guest.navigation')

@section('content')
<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Latest Articles</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articles as $article)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300"
                 data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                @if($article->image)
                <img src="{{ asset('images/' . $article->image) }}" 
                     alt="{{ $article->title }}" 
                     class="w-full h-48 object-cover">
                @endif
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $article->title }}</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        By {{ $article->author }} • {{ $article->created_at->diffForHumans() }}
                    </p>
                    <a href="{{ route('public.articles.show', $article) }}" 
                       class="inline-block text-blue-600 hover:text-blue-800 font-medium">
                        Read Article →
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $articles->links() }}
        </div>
    </div>
</div>
@endsection