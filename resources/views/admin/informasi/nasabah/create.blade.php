@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-semibold text-gray-800">Create Informasi Nasabah</h2>
                    <a href="{{ route('admin.informasi.nasabah.index') }}" class="bg-gray-200 px-4 py-2 rounded-md text-gray-700 hover:bg-gray-300">Back</a>
                </div>

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.informasi.nasabah.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="type" value="nasabah">

                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                        <input type="text" name="title" id="title" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ old('title') }}" required>
                    </div>

                    

                    <div class="mb-4">
                        <p class="block text-sm font-medium text-gray-700 mb-1">Gambar</p>
                        <p class="text-sm text-gray-500">Default thumbnail akan digunakan</p>
                        <div class="mt-2">
                            <img src="{{ asset('storage/informasi/images/information.png') }}" alt="Default thumbnail" class="h-24 w-auto object-cover border border-gray-200 rounded">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="pdf" class="block text-sm font-medium text-gray-700 mb-1">PDF (Opsional)</label>
                        <input type="file" name="pdf" id="pdf" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        <p class="mt-1 text-sm text-gray-500">PDF maksimal 10MB</p>
                    </div>

                    <div>
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 