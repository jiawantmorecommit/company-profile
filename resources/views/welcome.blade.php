@extends ('layouts-guest.navigation')

<!-- @section('title', content: 'Home') -->

@section('content')

<header class="relative w-full h-screen overflow-hidden">

    
    <img
        src="{{ asset('landing-page/images/banner-bps.png') }}"
        alt="Banner BPS"
        class="w-full h-full object-cover object-center " />

    
    <div class="absolute inset-0 "></div>

   
    <div class="absolute bottom-5 left-5 md:bottom-10 md:left-10">
        <h1 class="text-banner-bps text-4xl md:text-6xl font-bold text-white leading-tight">
            Berinvestasi <br> Mudah Dengan <br> Bumiputera !
        </h1>
        <a href="{{ url('https://bpot.co.id/') }}" target="_blank" rel="noopener noreferrer">
            <button class="mt-4 px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700 transition">
                Find Out More
            </button>
        </a>
    </div>
</header>

<section>
    
</section>






@endsection