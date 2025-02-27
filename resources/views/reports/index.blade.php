@extends('layouts.app')

@section('title', 'Daftar Laporan')

@section('content')
<header class="bg-white shadow">
    <div class="max-w-7xl font-bold mx-auto py-6 px-4 sm:px-6 lg:px-8">
        Laporan
    </div>
</header>

<div class="container max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Daftar Laporan Terbaru</h1>
        <a href="{{ route('reports.create') }}" 
           class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
            + Buat Laporan Baru
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($reports as $report)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="flex justify-center p-4">
                    <img src="{{ asset('storage/' . $report->image) }}" 
                         alt="{{ $report->title }}" 
                         class="w-full h-48 object-contain">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">{{ $report->title }}</h2>
                    
                    <div class="flex justify-between items-center">
                        <div class="space-x-2">
                            <a href="{{ route('reports.edit', $report->id) }}" 
                               class="text-blue-500 hover:text-blue-700">
                                Edit
                            </a>
                            <form action="{{ route('reports.destroy', $report->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="text-red-500 hover:text-red-700"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus?')">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mt-4">
                        <span class="text-sm text-gray-500">
                            {{ $report->created_at->format('d M Y') }}
                        </span>
                        <a href="{{ asset('storage/' . $report->pdf) }}" 
                           target="_blank"
                           class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Unduh PDF
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection