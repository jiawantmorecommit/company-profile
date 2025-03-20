@extends('layouts-guest.navigation')

@section('content')
<div class="bg-[#000033] text-white pt-24 pb-12">
    <div class="container mx-auto px-4 max-w-screen-xl">
        <h1 class="text-3xl font-bold mb-8 border-b-2 border-blue-400 pb-2 inline-block">
            Informasi Tata Kelola
        </h1>
        
        <div class="bg-white/10 backdrop-blur-sm rounded-lg shadow-md p-6">
            @if($informations->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($informations as $information)
                        <div class="bg-white/10 backdrop-blur-sm rounded-xl border border-white/20 hover:shadow-lg transition-all duration-300 h-full flex flex-col">
                            <div class="p-4 space-y-4 flex-1 flex flex-col">
                                <h2 class="text-xl font-bold text-white line-clamp-2">{{ $information->title }}</h2>
                                
                                @if($information->images)
                                    <div class="relative rounded-lg overflow-hidden bg-gray-800 mx-auto" style="max-width: 180px; max-height: 120px;">
                                        <img src="{{ asset('storage/' . $information->images) }}" 
                                             alt="{{ $information->title }}" 
                                             class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                                    </div>
                                @endif

                                <div class="prose max-w-none text-gray-200 leading-relaxed line-clamp-3 text-sm flex-1">
                                    {!! nl2br(e($information->content)) !!}
                                </div>

                                @if($information->pdf)
                                    <div class="pt-3 mt-auto">
                                        <a href="{{ route('informasi.download', ['type' => 'tata-kelola', 'id' => $information->id]) }}" 
                                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-lg shadow-md hover:bg-blue-500 transition-all duration-200 w-full justify-center" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                            Lihat Informasi
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <p class="text-gray-300 mt-4">Tidak ada informasi yang tersedia saat ini.</p>
                </div>
            @endif
        </div>
    </div>
</div>

@include('layouts-guest.footer')
@endsection