@extends ('layouts-guest.navigation')

@section('content')

<header class="relative w-full h-screen overflow-hidden">
    <img
        src="{{ asset('landing-page/images/banner-bps.png') }}"
        alt="Banner BPS"
        class="w-full h-full object-cover object-center " />


    <div class="absolute inset-0 "></div>


    <div class="absolute bottom-5 left-5 md:bottom-10 md:left-10">
        <h1 class="text-banner-bps text-4xl md:text-6xl font-bold text-white leading-tight">
            #Berinvestasi <br> Mudah Dengan <br> Bumiputera !
        </h1>
        <!-- <a href="{{ url('https://bpot.co.id/') }}" target="_blank" rel="noopener noreferrer">
            <button class="mt-4 px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700 transition">
                Find Out More
            </button>
        </a> -->
    </div>
</header>

<section class="relative py-20 md:py-32 bg-gradient-to-b from-blue-50 to-white" id="layanan-kami">
    <!-- Background Decoration -->
    <div class="absolute inset-0 opacity-50">
        <div class="absolute top-0 left-0 w-full">
            <svg viewBox="0 0 1440 320" class="w-full">
                <path fill="#3B82F6" fill-opacity="0.2" d="M0,160L48,165.3C96,171,192,181,288,170.7C384,160,480,128,576,133.3C672,139,768,181,864,181.3C960,181,1056,139,1152,128C1248,117,1344,139,1392,149.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
            </svg>
        </div>
    </div>

    <div class="max-w-screen-2xl mx-auto px-4 xl:px-8 relative z-10">
        <!-- Header Section -->
        <div class="flex flex-col lg:flex-row gap-12 items-start mb-16">
            <!-- Text Content -->
            <div class="flex-1 space-y-6">
                <div class="inline-flex flex-col">
                    <div class="flex items-center gap-5 mb-8">
                        <div class="w-14 h-14 bg-blue-600/10 rounded-2xl flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 tracking-tight">
                            Layanan Unggulan
                            <span class="block w-16 h-1.5 bg-blue-600 mt-4 rounded-full"></span>
                        </h2>
                    </div>
                    <p class="text-xl text-gray-600 leading-relaxed max-w-3xl">
                        Bumiputera Sekuritas menghadirkan solusi finansial inovatif dengan pendekatan teknologi mutakhir, didukung oleh tim profesional berkompeten di bidang pasar modal Indonesia.
                    </p>
                </div>
            </div>

            <!-- Image Column -->
            <!-- <div class="flex-1 w-full lg:max-w-[600px] aspect-video bg-gradient-to-tr from-blue-600 to-indigo-500 rounded-3xl shadow-2xl overflow-hidden transform transition-all hover:scale-[1.02]">
                <div class="relative h-full">
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/40 to-transparent"></div>
                    <div class="absolute inset-0 bg-[url('https://source.unsplash.com/random/1200x800?finance')] bg-cover bg-center"></div>
                </div>
            </div> -->
        </div>

        <!-- Service Cards -->
        <div class="grid md:grid-cols-3 gap-8 mt-20">
            <!-- Card 1 -->
            <div class="group relative bg-white rounded-2xl shadow-xl p-8 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl"
                data-aos="fade-up">
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-50 to-white opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-2xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Equity Capital Market</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Layanan komprehensif untuk transaksi ekuitas di pasar primer dan sekunder, memberikan akses optimal bagi investor institusi maupun ritel.
                    </p>
                    <div class="mt-6">
                        <!-- <span class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition-colors">
                            Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </span> -->
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group relative bg-white rounded-2xl shadow-xl p-8 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl"
                data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-50 to-white opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-2xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Debt Capital Market</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Solusi lengkap untuk penerbitan dan perdagangan instrumen utang korporasi dengan struktur yang kompetitif dan fleksibel.
                    </p>
                    <div class="mt-6">
                        <!-- <span class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition-colors">
                            Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </span> -->
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="group relative bg-white rounded-2xl shadow-xl p-8 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl"
                data-aos="fade-up" data-aos-delay="200">
                <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-blue-50 to-white opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-blue-600/10 rounded-2xl flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Investment Banking</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Layanan konsultasi keuangan korporasi dan transaksi strategis dengan pendekatan inovatif untuk optimalisasi nilai perusahaan.
                    </p>
                    <div class="mt-6">
                        <!-- <span class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition-colors">
                            Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </span> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative ">
    <div class="max-w-screen-xl mx-auto px-4 py-20 relative z-10">
        <!-- Bagian Fitur Utama -->
        <div class="flex flex-col-reverse md:flex-row items-center gap-8 mb-24">
            <!-- Kolom Teks -->
            <div class="flex-1 space-y-6">
                <div class="mb-8">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                        Mulai Investasi Anda dengan<br>
                        <span class="text-blue-600">#BPOT</span>
                    </h2>
                    <p class="text-lg text-gray-600 mt-4">Berinvestasi kini dimulai dari genggaman anda!</p>
                </div>

                <!-- List Fitur -->
                <div class="space-y-8">
                    <!-- Fitur 1 -->
                    <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-white transition-all">
                        <div class="w-10 h-10 p-2 bg-blue-100 rounded-lg text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900">Aksesibel</h3>
                            <p class="text-gray-600 mt-1">Tersedia di berbagai platform mulai dari Desktop, iOS, maupun Android.</p>
                        </div>
                    </div>

                    <!-- Fitur 2 -->
                    <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-white transition-all">
                        <div class="w-10 h-10 p-2 bg-blue-100 rounded-lg text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900">Kenyamanan</h3>
                            <p class="text-gray-600 mt-1">Sistem terintegrasi dengan enkripsi end-to-end untuk keamanan maksimal.</p>
                        </div>
                    </div>

                    <!-- Fitur 3 -->
                    <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-white transition-all">
                        <div class="w-10 h-10 p-2 bg-blue-100 rounded-lg text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900">Hemat Biaya</h3>
                            <p class="text-gray-600 mt-1">Trading online dengan biaya rendah dan deposit terjangkau.</p>
                        </div>
                    </div>
                </div>

                <a href="https://bpot.co.id/" target="_blank" class="inline-block mt-6">
                    <button class="px-8 py-4 bg-blue-600 text-white rounded-xl font-semibold hover:bg-blue-700 transition-all flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                        </svg>
                        Unduh BPOT Sekarang
                    </button>
                </a>
            </div>

            <!-- Kolom Gambar -->
            <div class="flex-1">
                <img src="{{ asset('landing-page/images/logo-chart-hp.png') }}"
                    alt="Platform BPOT"
                    class="w-full h-auto transform hover:scale-105 transition-transform">
            </div>
        </div>

        <!-- Bagian Statistik -->
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Modal Kerja -->
            <div class="bg-white p-8 rounded-2xl shadow-lg">
                <div class="flex items-center gap-6">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900">Modal Kerja Bersih</h3>
                        <p class="text-4xl font-bold text-blue-600 mt-2">70 Miliar</p>
                        <p class="text-gray-600 mt-2">Periode 2020-2024 dengan MKBD Rp55-85 Miliar</p>
                    </div>
                </div>
            </div>

            <!-- Statistik Nasabah -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Nasabah Individu -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center  gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-gray-900">4,619</p>
                            <p class="text-gray-600">Nasabah Individu</p>
                        </div>
                    </div>
                </div>

                <!-- Nasabah Institusi -->
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-gray-900">223</p>
                            <p class="text-gray-600">Nasabah Institusi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full opacity-10 rotate-180">
        <svg viewBox="0 0 1440 320" class="w-full">
            <path fill="#3B82F6" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,170.7C384,160,480,128,576,133.3C672,139,768,181,864,181.3C960,181,1056,139,1152,128C1248,117,1344,139,1392,149.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold mb-12">Berita Terkini</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredNews as $news)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300"
                 data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                @if($news->image)
                <img src="{{ asset('storage/' . $news->image) }}" 
                     alt="{{ $news->title }}" 
                     class="w-full h-48 object-cover">
                @endif
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $news->title }}</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        {{ Str::limit(strip_tags($news->content), 100) }}
                    </p>
                    <a href="{{ route('public.news.show', $news) }}" 
                       class="text-blue-600 hover:text-blue-800 font-medium">
                        Read More →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            width: '60%',
            imageUrl: "{{ asset('landing-page/images/Peringatan Penipuan.png') }}",
            imageAlt: 'Gambar',
            showCancelButton: false,
            confirmButtonText: 'Tutup',
            confirmButtonColor: '#2563eb',
            customClass: {
                popup: 'swal2-popup-custom rounded-xl',
                confirmButton: 'swal2-confirm-custom px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors'
            },
            allowOutsideClick: false

        });
    });
</script>
@endsection