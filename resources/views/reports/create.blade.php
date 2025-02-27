@extends('layouts.app')

@section('title', 'Buat Laporan Baru')

@section('content')
<header class="bg-white shadow">
    <div class="max-w-7xl font-bold mx-auto py-6 px-4 sm:px-6 lg:px-8">
        Buat Laporan Baru
    </div>
</header>

<div class="container max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <form method="POST" action="{{ route('reports.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Judul -->
                <div class="mb-6">
                    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Judul Laporan</label>
                    <input type="text" name="title" id="title" required
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           placeholder="Masukkan judul laporan">
                </div>

                <!-- Gambar -->
                <div class="mb-6">
                    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Gambar</label>
                    <input type="file" name="image" id="image" accept="image/*" required
                           class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    <p class="text-gray-500 text-xs mt-2">Format: JPEG, PNG, JPG | Maksimal 2MB</p>
                </div>

                <!-- PDF -->
                <div class="mb-6">
                    <label for="pdf" class="block text-gray-700 text-sm font-bold mb-2">File PDF</label>
                    <input type="file" name="pdf" id="pdf" accept="application/pdf" required
                           class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    <p class="text-gray-500 text-xs mt-2">Format: PDF | Maksimal 10MB</p>
                </div>

                <!-- Tombol Simpan -->
                <div class="flex items-center justify-end">
                    <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Simpan Laporan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection