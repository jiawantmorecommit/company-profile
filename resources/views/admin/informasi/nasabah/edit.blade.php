@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-gray-800">Edit Informasi Nasabah</h2>
                    <a href="{{ route('admin.informasi.nasabah.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 transition duration-150 ease-in-out">
                        Kembali
                    </a>
                </div>

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.informasi.nasabah.update', $information->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $information->title) }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    </div>

                    <div class="mb-4">
                        <label for="images" class="block text-sm font-medium text-gray-700 mb-1">Gambar (Opsional)</label>
                        @if($information->images)
                            <div class="mb-2">
                                <img src="{{ asset('storage/informasi/' . $information->images) }}" alt="{{ $information->title }}" class="h-32 w-auto object-cover">
                                <p class="text-gray-500 text-xs mt-1">Gambar saat ini</p>
                            </div>
                        @endif
                        <input type="file" name="images" id="images" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <p class="text-gray-500 text-xs mt-1">Format: JPG, PNG, GIF (Maksimal 2MB). Biarkan kosong jika tidak ingin mengubah gambar.</p>
                    </div>

                    <div class="mb-4">
                        <label for="pdf" class="block text-sm font-medium text-gray-700 mb-1">PDF (Opsional)</label>
                        @if($information->pdf)
                            <div class="mb-2">
                                <a href="{{ route('informasi.download', ['type' => 'nasabah', 'id' => $information->id]) }}" class="text-blue-600 hover:underline" target="_blank">
                                    Lihat PDF saat ini
                                </a>
                            </div>
                        @endif
                        <input type="file" name="pdf" id="pdf" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                        <p class="text-gray-500 text-xs mt-1">Format: PDF (Maksimal 10MB). Biarkan kosong jika tidak ingin mengubah PDF.</p>
                    </div>

                    <div class="mt-6">
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-150 ease-in-out">
                            Perbarui
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 