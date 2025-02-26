@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <div class="bg-white rounded-2xl shadow-xl p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 border-b border-gray-200 pb-4">Edit Report</h1>
        
        <form action="{{ route('reports.update', $report->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Title Input -->
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-600 mb-2">Report Title</label>
                <input type="text" name="title" value="{{ $report->title }}" 
                       class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" required>
            </div>

            <!-- Image Upload -->
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-600 mb-2">Current Image</label>
                <div class="mb-4 p-4 border-2 border-dashed border-gray-200 rounded-lg w-48">
                    <img src="{{ asset('storage/' . $report->image) }}" 
                         alt="Current Image" 
                         class="w-full h-auto object-cover rounded-md">
                </div>
                <div class="relative">
                    <input type="file" name="image" 
                           class="opacity-0 absolute w-full h-full cursor-pointer">
                    <div class="bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                        <p class="text-sm text-gray-500">Click to upload new image</p>
                    </div>
                </div>
            </div>

            <!-- PDF Upload -->
            <div class="mb-8">
                <label class="block text-sm font-semibold text-gray-600 mb-2">Current PDF</label>
                <div class="mb-4 flex items-center">
                    <svg class="w-8 h-8 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <a href="{{ asset('storage/' . $report->file) }}" 
                       target="_blank" 
                       class="text-blue-600 hover:underline">View Current PDF</a>
                </div>
                <div class="relative">
                    <input type="file" name="file" 
                           class="opacity-0 absolute w-full h-full cursor-pointer">
                    <div class="bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                        <p class="text-sm text-gray-500">Click to upload new PDF</p>
                    </div>
                </div>
            </div>

            <!-- Publisher Input -->
            <div class="mb-8">
                <label class="block text-sm font-semibold text-gray-600 mb-2">Publisher</label>
                <input type="text" name="publisher" value="{{ $report->publisher }}" 
                       class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all" required>
            </div>

            <button type="submit" 
                    class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white py-3 px-6 rounded-lg font-semibold shadow-md transition-all duration-300">
                Update Report
            </button>
        </form>
    </div>
</div>
@endsection