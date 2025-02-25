@extends('layouts.app')

@section('title', 'Edit News')

@section('content')

<header class="bg-white shadow">
    <div class="max-w-7xl font-bold mx-auto py-6 px-4 sm:px-6 lg:px-8">
        Edit Berita
    </div>
</header>
<div class="container max-w-7xl font-bold mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit News</h1>

    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <!-- Title -->
        <div class="mb-6">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $news->title) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
        </div>

        <!-- Image -->
        <div class="mb-6">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            @if($news->image)
                <div class="mt-4">
                    <img src="{{ asset('storage/' . $news->image) }}" alt="Current Image" class="w-32 h-32 object-cover rounded-lg">
                </div>
            @endif
        </div>

        <!-- Content -->
        <div class="mb-6">
            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
            <textarea name="content" id="content" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>{{ old('content', $news->content) }}</textarea>
        </div>

        <!-- Publisher -->
        <div class="mb-6">
            <label for="publisher" class="block text-sm font-medium text-gray-700">Publisher</label>
            <input type="text" name="publisher" id="publisher" value="{{ old('publisher', $news->publisher) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Update News</button>
        </div>
    </form>
</div>
@endsection