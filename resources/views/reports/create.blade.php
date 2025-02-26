@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <div class="bg-white rounded-2xl shadow-xl p-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 border-b border-gray-200 pb-4">Create New Report</h1>
        
        <form action="{{ route('reports.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title Input -->
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-600 mb-2">Report Title</label>
                <input type="text" name="title" 
                       class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                       placeholder="Enter report title" required>
            </div>

            <!-- Image Upload -->
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-600 mb-2">Upload Image</label>
                <div class="relative">
                    <input type="file" name="image" 
                           class="opacity-0 absolute w-full h-full cursor-pointer"
                           required>
                    <div class="bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                        <svg class="w-12 h-12 mx-auto text-gray-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <p class="text-sm text-gray-500">Drag and drop or click to upload image</p>
                    </div>
                </div>
            </div>

            <!-- PDF Upload -->
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-600 mb-2">Upload PDF</label>
                <div class="relative">
                    <input type="file" name="file" 
                           class="opacity-0 absolute w-full h-full cursor-pointer"
                           required>
                    <div class="bg-gray-50 border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                        <svg class="w-12 h-12 mx-auto text-gray-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <p class="text-sm text-gray-500">Drag and drop or click to upload PDF</p>
                    </div>
                </div>
            </div>

            <!-- Publisher Input -->
            <div class="mb-8">
                <label class="block text-sm font-semibold text-gray-600 mb-2">Publisher</label>
                <input type="text" name="publisher" 
                       class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                       placeholder="Enter publisher name" required>
            </div>

            <button type="submit" 
                    class="w-full bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white py-3 px-6 rounded-lg font-semibold shadow-md transition-all duration-300">
                Publish Report
            </button>
        </form>
    </div>
</div>
@endsection