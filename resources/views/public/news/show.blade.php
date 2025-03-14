@extends('layouts-guest.navigation')

@section('content')
<div class="min-h-screen bg-gray-50 py-30 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden" data-aos="zoom-in">
            @if($news->image)
            <img src="{{ asset('storage/' . $news->image) }}" 
                 alt="{{ $news->title }}" 
                 class="w-full h-64 object-cover">
            @endif
            <div class="p-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $news->title }}</h1>
                <div class="flex items-center text-sm text-gray-500 mb-6">
                    <span class="mr-4">By {{ $news->publisher }}</span>
                    <span>{{ $news->created_at->format('F j, Y') }}</span>
                </div>
                <div class="prose max-w-none text-gray-700">
                    {!! $news->content !!}
                </div>
                <div class="mt-8">
                    <a href="{{ route('public.news.index') }}" 
                       class="inline-flex items-center text-blue-600 hover:text-blue-800">
                        ← Back to News
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection