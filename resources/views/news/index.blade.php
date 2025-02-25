@extends('layouts.app')

@section('title', 'News List')

@section('content')
<header class="bg-white shadow">
    <div class="max-w-7xl font-bold mx-auto py-6 px-4 sm:px-6 lg:px-8">
        Berita
    </div>
</header>

<div class="container max-w-7xl font-bold mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Latest News</h1>
        <a href="{{ route('news.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
            + Create New
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($news as $item)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                @if($item->image)
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
                @endif
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $item->title }}</h2>
                    <p class="text-gray-600 mb-4">{{ Str::limit($item->content, 30) }}</p>
                    <div class="flex justify-between items-center">
                        <div class="space-x-2">
                            <a href="{{ route('news.edit', $item->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                            <form action="{{ route('news.destroy', $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4"> <!-- Tambahkan div wrapper ini -->
                        <span class="text-sm text-gray-500">{{ $item->created_at->format('d M Y') }}</span>
                        <a href="{{ route('news.show', $item->id) }}" class="text-blue-500 hover:text-blue-700">Read More →</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection