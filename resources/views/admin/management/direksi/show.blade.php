@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="max-w-3xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Detail Direksi</h1>
                <p class="text-sm text-gray-600 mt-1">Informasi lengkap anggota direksi</p>
            </div>
            <a href="{{ route('admin.management.direksi.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-100 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="aspect-w-16 aspect-h-9">
                <img src="{{ asset('images/direksi/' . $direksi->image) }}" alt="{{ $direksi->name }}" class="object-cover w-full h-96">
            </div>
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ $direksi->name }}</h2>
                <p class="text-lg text-gray-600 mb-4">{{ $direksi->jabatan }}</p>
                <div class="prose max-w-none">
                    <p class="text-gray-700">{{ $direksi->description }}</p>
                </div>
            </div>
            <div class="px-6 py-4 bg-gray-50 flex justify-end space-x-2">
                <a href="{{ route('admin.management.direksi.edit', $direksi->id) }}" class="inline-flex items-center px-4 py-2 bg-yellow-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Edit
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
