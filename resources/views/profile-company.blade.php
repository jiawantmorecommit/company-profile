@extends('layouts-guest.navigation')
@section('content')
<div class="bg-white">
    <div class="relative overflow-hidden bg-gradient-to-r from-blue-900 to-blue-600">
        <div class="absolute inset-0 z-0">
            <svg class="absolute bottom-0 right-0 opacity-20 w-48 md:w-auto" width="574" height="364" viewBox="0 0 574 364" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 363.5L27.5 327L54.5 294L82 256.5L109 221.5L136.5 190L164 156.5L191.5 125L218.5 94.5L246 62L273.5 34L300.5 6.5" stroke="white" stroke-width="2" stroke-linejoin="round" />
                <path d="M315 363.5L342.5 327L369.5 294L397 256.5L424 221.5L451.5 190L479 156.5L506.5 125L533.5 94.5L561 62L588.5 34L615.5 6.5" stroke="white" stroke-width="2" stroke-linejoin="round" />
            </svg>
            <svg class="absolute top-1/4 left-4 md:left-10 opacity-10 w-16 h-16 md:w-24 md:h-24" width="120" height="120" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1">
                <path d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16m14 0H5m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 5h1m4-5h1m-1 5h1m-5 5h5" />
            </svg>
            <svg class="absolute top-12 right-12 md:top-20 md:right-20 opacity-15 w-12 h-12 md:w-16 md:h-16" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="py-12 md:py-24">
                <div class="relative">
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4 md:mb-6 relative z-10">
                        PT. Bumiputera Sekuritas
                    </h1>
                    <svg class="absolute -top-6 -left-6 w-24 h-24 md:-top-8 md:-left-8 md:w-32 md:h-32 text-white opacity-20 animate-pulse" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="8" fill="none" stroke-dasharray="5 5" />
                    </svg>
                    <p class="text-lg sm:text-xl text-gray-50 max-w-3xl relative z-10">
                        Financial Services Provider in the Indonesian Capital Market
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
    <div class="max-w-7xl">
        <div class="flex items-center gap-3 mb-12">

            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
            <h2 class="text-3xl font-semibold text-gray-900">Tentang Kami</h2>
        </div>

        <div class="space-y-8">

            <div class="flex gap-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center" data-aos="zoom-in" data-aos-delay="300">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p class="text-gray-600 leading-relaxed" data-aos="fade-left" data-aos-delay="500">
                    PT Bumiputera Sekuritas merupakan Perusahaan Penyedia Jasa Keuangan di bidang Pasar Modal yang melayani nasabah individu dan institusi, beroperasi berdasarkan izin OJK nomor KEP 158/PM/1991 (Pedagang Perantara Efek) dan KEP 157/PM/1991 (Penjamin Emisi Efek). Sebagai anak usaha AJB Bumiputera 1912, perusahaan ini telah berpengalaman lebih dari 15 tahun di industri Pasar Modal Indonesia. Untuk meningkatkan layanan, Bumiputera Sekuritas meluncurkan inovasi produk Bumiputera Online Trading (BPOT), sebuah platform perdagangan saham berbasis teknologi yang bertujuan memudahkan transaksi online sekaligus meningkatkan jumlah nasabah dan nilai transaksi.
                </p>
            </div>


            <div class="flex gap-5" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center" data-aos="zoom-in" data-aos-delay="400">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <p class="text-gray-600 leading-relaxed" data-aos="fade-right" data-aos-delay="600">
                    Perusahaan berkomitmen memperluas partisipasi dalam pengembangan Pasar Modal Indonesia, yang tercermin dari pertumbuhan jumlah nasabah baik individu maupun institusi. Sebagai perusahaan sekuritas terpercaya, Bumiputera Sekuritas menyediakan layanan komprehensif meliputi Perdagangan Efek (Equity & Debt Capital Market), Investment Banking, dan Research. Dukungan sumber daya manusia profesional serta pengalaman panjang menjadi fondasi dalam memberikan layanan prima sesuai visi-misi perusahaan.
                </p>
            </div>


            <div class="flex gap-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-100 flex items-center justify-center" data-aos="zoom-in" data-aos-delay="500">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <p class="text-gray-600 leading-relaxed" data-aos="fade-up" data-aos-delay="700">
                    Dengan fokus pada inovasi dan nilai tambah, Bumiputera Sekuritas merancang produk investasi yang disesuaikan kebutuhan nasabah untuk mencapai return optimal. Perseroan terus memperkokoh posisi sebagai mitra terpercaya melalui penyempurnaan layanan, peningkatan kompetensi SDM, serta adaptasi teknologi terkini, sehingga mampu mempertahankan reputasi sebagai penyedia jasa pasar modal berkelas dengan layanan terbaik di Indonesia.
                </p>
            </div>
        </div>
    </div>
</div>


<div class="bg-gray-50 border-y border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="max-w-7xl">
            <div class="flex items-center gap-3 mb-12">

                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                </svg>
                <h2 class="text-3xl font-semibold text-gray-900">Keunggulan Kami</h2>
            </div>

            <div class="grid md:grid-cols-2 gap-x-12 gap-y-8">

                <div class="group flex gap-5 p-5 hover:bg-white hover:shadow-lg transition-all rounded-xl">
                    <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center group-hover:bg-blue-200 transition-colors">
                        <svg class="w-8 h-8 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 22h18M5 18h14M6 10l3-6 3 6M12 4v16M9 14h6M3 6h2.5a1.5 1.5 0 0 1 1.5 1.5V10" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">Perantara Pedagang Efek</h3>
                        <p class="text-gray-600">Layanan pialang sekuritas yang komprehensif untuk investor perorangan dan institusi.</p>
                    </div>
                </div>


                <div class="group flex gap-5 p-5 hover:bg-white hover:shadow-lg transition-all rounded-xl">
                    <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center group-hover:bg-green-200 transition-colors">
                        <svg class="w-8 h-8 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 14l9-5-9-5-9 5 9 5zM12 14v6m0 0l-3-3m3 3l3-3m3 3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">Penjaminan Emisi</h3>
                        <p class="text-gray-600">Layanan penjaminan emisi profesional untuk perusahaan yang ingin meningkatkan modal di pasar publik.</p>
                    </div>
                </div>


                <div class="group flex gap-5 p-5 hover:bg-white hover:shadow-lg transition-all rounded-xl">
                    <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-orange-100 flex items-center justify-center group-hover:bg-orange-200 transition-colors">
                        <svg class="w-8 h-8 text-orange-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 18v-6m0 0V6m0 6h6m-6 0H6M3 3h18a2 2 0 012 2v14a2 2 0 01-2 2H3a2 2 0 01-2-2V5a2 2 0 012-2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">Trading Online</h3>
                        <p class="text-gray-600">Platform Bumiputera Online Trading (BPOT) untuk perdagangan saham yang nyaman, aman, dan efisien.</p>
                    </div>
                </div>


                <div class="group flex gap-5 p-5 hover:bg-white hover:shadow-lg transition-all rounded-xl">
                    <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-purple-100 flex items-center justify-center group-hover:bg-purple-200 transition-colors">
                        <svg class="w-8 h-8 text-purple-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            <path d="M12 7h.01M16 7h.01M8 7h.01" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">Penasihat Investasi</h3>
                        <p class="text-gray-600">Panduan dan saran dari para ahli untuk membantu klien membuat keputusan investasi yang tepat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
    <div class="max-w-7xl">
        <!-- Section Manajemen -->
        <h2 class="text-3xl font-semibold text-gray-900 mb-12" data-aos="fade-up">Manajemen</h2>
        <div class="space-y-16">
            <!-- Dewan Komisaris -->
            <div>
                <h3 class="text-xl font-medium text-gray-900 mb-8 border-b border-gray-200 pb-3" data-aos="fade-up">
                    Dewan Komisaris
                </h3>
                <div class="space-y-12">
                    @forelse($komisarisData as $index => $komisaris)
                        @if($index % 2 == 0)
                            <!-- Anggota Dewan Komisaris (even index) -->
                            <div class="flex flex-col gap-8 md:gap-12 md:flex-row md:items-center" data-aos="fade-right">
                                <div class="w-full md:w-1/2">
                                    <div class="relative h-64 rounded-2xl overflow-hidden bg-gradient-to-r from-white to-blue-800">
                                        <div class="absolute inset-0">
                                            <img
                                                src="{{ asset('images/komisaris/' . $komisaris->image) }}"
                                                alt="{{ $komisaris->name }}"
                                                class="w-50 object-cover rounded-2xl" />
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                                        </div>
                                        <div class="absolute bottom-4 right-4 text-white">
                                            <h4 class="text-2xl font-bold">{{ $komisaris->name }}</h4>
                                            <p class="text-blue-200">{{ $komisaris->jabatan }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 md:pl-8">
                                    <p class="text-gray-600 leading-relaxed">{{ $komisaris->description }}</p>
                                    <div class="mt-4 flex gap-3">
                                        <a href="#" class="text-blue-600 hover:text-blue-800">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <!-- Anggota Dewan Komisaris (odd index) -->
                            <div class="flex flex-col gap-8 md:gap-12 md:flex-row-reverse md:items-center" data-aos="fade-left">
                                <div class="w-full md:w-1/2">
                                    <div class="relative h-64 rounded-2xl overflow-hidden bg-gradient-to-r from-white to-blue-800">
                                        <div class="absolute inset-0">
                                            <img
                                                src="{{ asset('images/komisaris/' . $komisaris->image) }}"
                                                alt="{{ $komisaris->name }}"
                                                class="w-50 object-cover rounded-2xl" />
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                                        </div>
                                        <div class="absolute bottom-4 right-4 text-white text-right">
                                            <h4 class="text-2xl font-bold">{{ $komisaris->name }}</h4>
                                            <p class="text-green-200">{{ $komisaris->jabatan }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 md:pr-8">
                                    <p class="text-gray-600 leading-relaxed">{{ $komisaris->description }}</p>
                                    <div class="mt-4 flex gap-3 justify-end">
                                        <a href="#" class="text-green-600 hover:text-green-800">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                        <div class="text-center py-8">
                            <p class="text-gray-500">Belum ada data komisaris yang tersedia.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Direksi -->
            <div>
                <h3 class="text-xl font-medium text-gray-900 mb-8 border-b border-gray-200 pb-3" data-aos="fade-up">
                    Direksi
                </h3>
                <div class="space-y-12">
                    @forelse($direksiData as $index => $direksi)
                        @if($index % 2 == 0)
                            <!-- Anggota Direksi (even index) -->
                            <div class="flex flex-col gap-8 md:gap-12 md:flex-row md:items-center" data-aos="fade-right" data-aos-delay="100">
                                <div class="w-full md:w-1/2">
                                    <div class="relative h-64 rounded-2xl overflow-hidden bg-gradient-to-r from-white to-blue-800">
                                        <div class="absolute inset-0">
                                            <img
                                                src="{{ asset('images/direksi/' . $direksi->image) }}"
                                                alt="{{ $direksi->name }}"
                                                class="w-50 object-cover rounded-2xl" />
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                                        </div>
                                        <div class="absolute bottom-4 right-4 text-white">
                                            <h4 class="text-2xl font-bold">{{ $direksi->name }}</h4>
                                            <p class="text-orange-200">{{ $direksi->jabatan }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 md:pr-8">
                                    <p class="text-gray-600 leading-relaxed">{{ $direksi->description }}</p>
                                    <div class="mt-4 flex gap-3 justify-start">
                                        <a href="#" class="text-green-600 hover:text-green-800">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <!-- Anggota Direksi (odd index) -->
                            <div class="flex flex-col gap-8 md:gap-12 md:flex-row-reverse md:items-center" data-aos="fade-left" data-aos-delay="100">
                                <div class="w-full md:w-1/2">
                                    <div class="relative h-64 rounded-2xl overflow-hidden bg-gradient-to-r from-white to-blue-800">
                                        <div class="absolute inset-0">
                                            <img
                                                src="{{ asset('images/direksi/' . $direksi->image) }}"
                                                alt="{{ $direksi->name }}"
                                                class="w-50 object-cover rounded-2xl" />
                                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                                        </div>
                                        <div class="absolute bottom-4 right-4 text-white text-right">
                                            <h4 class="text-2xl font-bold">{{ $direksi->name }}</h4>
                                            <p class="text-purple-200">{{ $direksi->jabatan }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 md:pr-8">
                                    <p class="text-gray-600 leading-relaxed">{{ $direksi->description }}</p>
                                    <div class="mt-4 flex gap-3 justify-end">
                                        <a href="#" class="text-green-600 hover:text-green-800">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                        <div class="text-center py-8">
                            <p class="text-gray-500">Belum ada data direksi yang tersedia.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Section Struktur Organisasi -->
        <div class="mt-24">
            <div class="p-6 bg-white rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-start mb-6">Struktur Organisasi</h2>
                <div class="flex justify-start mb-4">
                    <button
                        id="toggleStrukturBtn"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors"
                        type="button">
                        Tampilkan Struktur Organisasi
                    </button>
                </div>
                <div id="strukturOrganisasiContainer" class="border-2 border-gray-300 p-4 rounded-lg hidden">
                    <div class="bg-gray-100 flex items-center justify-center p-8 rounded">
                        <img
                            src="{{ asset('landing-page/images/19Feb2025STRUKTUR ORGANISASI - BPS (1)_page-0001.jpg') }}"
                            alt="Struktur Organisasi"
                            class="max-w-full h-auto"
                            loading="lazy" />
                    </div>
                    <p class="text-sm text-gray-500 mt-2">
                        Struktur Organisasi Perusahaan
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Struktur Organisasi -->
<div id="strukturModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="bg-black opacity-50 absolute inset-0"></div>
    <div class="bg-white rounded-lg shadow-lg p-8 z-10 max-w-3xl mx-auto transition-transform transform scale-100 hover:scale-105">
        <h2 class="text-2xl font-bold mb-4 text-center">Struktur Organisasi</h2>
        <div class="flex justify-center mb-4">
            <img
                src="{{ asset('landing-page/images/19Feb2025STRUKTUR ORGANISASI - BPS (1)_page-0001.jpg') }}"
                alt="Struktur Organisasi"
                class="max-w-full h-auto rounded-lg shadow-md"
                loading="lazy" />
        </div>
        <p class="text-sm text-gray-500 mb-4 text-center">Struktur Organisasi Perusahaan</p>
        <button id="closeModalBtn" class="px-6 py-3 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 transition-colors w-full">
            Tutup
        </button>
    </div>
</div>



<!-- Contact Section -->
<div class="bg-gradient-to-r from-gray-50 to-blue-50 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="max-w-7xl">
            <div class="flex items-center gap-3 mb-12">
                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <h2 class="text-3xl font-semibold text-gray-900">Hubungi Kami</h2>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Contact Cards -->
                <div class="col-span-2">
                    <p class="text-gray-600 mb-8">Untuk informasi lebih lanjut mengenai layanan kami atau untuk menjadwalkan konsultasi, silakan hubungi kami menggunakan informasi di bawah ini:</p>

                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Phone Card -->
                        <div class="group bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl hover:scale-105 hover:bg-blue-50">
                            <div class="flex-shrink-0 w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mb-4 group-hover:bg-blue-200 transition-colors">
                                <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-gray-900 mb-2">Telepon</h3>
                            <p class="text-gray-600">021 - 52960155</p>
                            <p class="text-gray-600">FAX: 021 - 52960156</p>
                            <p class="text-gray-600">CS: 021 - 5224560</p>
                        </div>

                        <!-- Email Card -->
                        <div class="group bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl hover:scale-105 hover:bg-green-50">
                            <div class="flex-shrink-0 w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-4 group-hover:bg-green-200 transition-colors">
                                <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-gray-900 mb-2">Email</h3>
                            <p class="text-gray-600">cs.bpot@bpsekuritas.co.id</p>
                        </div>

                        <!-- Address Card -->
                        <div class="group bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl hover:scale-105 hover:bg-purple-50">
                            <div class="flex-shrink-0 w-14 h-14 rounded-full bg-purple-100 flex items-center justify-center mb-4 group-hover:bg-purple-200 transition-colors">
                                <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-gray-900 mb-2">Alamat</h3>
                            <p class="text-gray-600">Wisma Bumiputera Lt.17<br>Jl. Jend. Sudirman Kav. 75<br>Jakarta 12910</p>
                        </div>

                        <!-- Hours Card -->
                        <div class="group bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl hover:scale-105 hover:bg-orange-50">
                            <div class="flex-shrink-0 w-14 h-14 rounded-full bg-orange-100 flex items-center justify-center mb-4 group-hover:bg-orange-200 transition-colors">
                                <svg class="w-7 h-7 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-gray-900 mb-2">Jam Kerja</h3>
                            <p class="text-gray-600">Senin - Jumat<br>09:00 - 17:00 WIB</p>
                        </div>

                        <!-- Surabaya Branch Card -->
                        <div class="group bg-white rounded-xl shadow-md p-6 transition-all duration-300 hover:shadow-xl hover:scale-105 hover:bg-yellow-50">
                            <div class="flex-shrink-0 w-14 h-14 rounded-full bg-yellow-100 flex items-center justify-center mb-4 group-hover:bg-yellow-200 transition-colors">
                                <svg class="w-7 h-7 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-medium text-gray-900 mb-2">Kantor Cabang Surabaya</h3>
                            <p class="text-gray-600">Bumi Mandiri Tower 1, Lt. 7, Ruang S-7<br>Jl. Jend. Basuki Rachmat 123-137<br>Surabaya, Jawa Timur, Indonesia. 60621</p>
                            <p class="text-gray-600 mt-2">Telp: 031 - 5319139</p>
                        </div>
                    </div>
                </div>

                <!-- Map & Form Button -->
                <div class="col-span-2 lg:col-span-1">
                    <!-- Jakarta Office Map -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden h-full mb-8">
                        <div class="h-48 sm:h-64 lg:h-72 bg-gray-200 relative">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d958.0366103854493!2d106.82268709325437!3d-6.20733868081043!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f403494aeff3%3A0xac08c60c37d6d12b!2sWisma%20Bumiputera%2C%20Kuningan%2C%20Setia%20Budi%2C%20Setiabudi%2C%20South%20Jakarta%20City%2C%20Jakarta%2C%20Indonesia!5e1!3m2!1sid!2sus!4v1742372324874!5m2!1sid!2sus"
                                class="w-full h-full"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-medium text-gray-900 mb-2">Kantor Pusat Jakarta</h3>
                            <p class="text-gray-600 mb-4">Wisma Bumiputera Lt.17, Jl. Jend. Sudirman Kav. 75, Jakarta 12910</p>
                            <div class="bg-white rounded-xl shadow-md overflow-hidden h-full mt-5">
                        <div class="h-48 sm:h-64 lg:h-72 bg-gray-200 relative">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3823.7414927072623!2d112.74061074138041!3d-7.271869797431498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbdf9a0c4325%3A0xfddaf05a21a1713c!2sGedung%20Bumi%20Mandiri!5e1!3m2!1sen!2sid!4v1742452147174!5m2!1sen!2sid" 
                                class="w-full h-full" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-medium text-gray-900 mb-2">Kantor Cabang Surabaya</h3>
                            <p class="text-gray-600 mb-4">Bumi Mandiri Tower 1, Lt. 7, Ruang S-7, Jl. Jend. Basuki Rachmat 123-137, Surabaya 60621</p>
                        </div>
                    </div>
                            <a href="#" class="block w-full bg-blue-600 text-white font-medium py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-300 shadow-md hover:shadow-lg text-center mt-5">
                                Kirim Pesan
                            </a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('toggleStrukturBtn').addEventListener('click', function() {
        const modal = document.getElementById('strukturModal');
        modal.classList.toggle('hidden');
    });

    document.getElementById('closeModalBtn').addEventListener('click', function() {
        const modal = document.getElementById('strukturModal');
        modal.classList.add('hidden');
    });

    AOS.init({
    duration: 1000,
    once: true, // whether animation should happen only once
    offset: 100, // offset (in px) from the original trigger point
});
</script>

@include ('layouts-guest.footer')
@endsection