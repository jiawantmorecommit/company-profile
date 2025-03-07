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

<section class="py-12 md:py-35 bg-stone-50" id="layanan-kami">
    <div class="max-w-screen-xl mx-auto px-4">
        <div class="flex flex-col md:flex-row items-start gap-6 md:gap-8">
            <!-- Kolom Kiri: Judul & Teks -->
            <div class="flex-1 space-y-4">
                <!-- Judul dengan Ikon -->
                <div class="flex items-center space-x-4">
                    <!-- Ikon SVG -->
                    <div class="w-10 h-10 text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-black">
                        Layanan Kami
                    </h2>
                </div>
                <p class="text-lg md:text-xl mt-8 text-black/90 leading-relaxed md:leading-loose max-w-2xl">
                    Bumiputera Sekuritas merupakan perusahaan unggulan, dapat dipercaya, dan inovatif yang menyediakan solusi keuangan di sektor pasar modal Indonesia, berbekal sumber daya manusia berkualitas tinggi serta teknologi mutakhir.
                </p>
            </div>

            <!-- Kolom Kanan: Gambar -->
            <div class="flex-1 w-full max-w-[560px] relative">
                <div class="absolute inset-0 bg-gradient-to-t from-blue-950/30 to-transparent rounded-xl"></div>
            </div>
        </div>
    </div>

    <div class="card py-12 max-w-screen-xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6" id="cards-container">
            <!-- Card 1 -->
            <div class="bg-white rounded-xl shadow-lg p-6 transition-all duration-300 hover:shadow-xl card-item"
                data-aos="fade-up"
                data-aos-duration="2000">
                <div class="w-12 h-12 text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-blue-900 mb-4">Equity Capital Market</h3>
                <p class="text-gray-600 leading-relaxed">
                    Melayani Nasabah individu dan institusi dalam penjualan Efek, sebagai perantara pedagang Efek bagi investor lokal maupun global. Terlibat proaktif dalam transaksi Saham di pasar perdana dan sekunder.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl shadow-lg p-6 transition-all duration-300 hover:shadow-xl card-item"
                data-aos="fade-up"
                data-aos-duration="2500">
                <div class="w-12 h-12 text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-blue-900 mb-4">Debt Capital Market</h3>
                <p class="text-gray-600 leading-relaxed">
                    Layanan perdagangan surat utang untuk Nasabah (Brokerage) dan kepentingan sendiri (Proprietary Trading). Penempatan Surat Utang Jangka Panjang Pendapatan Tetap.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl shadow-lg p-6 transition-all duration-300 hover:shadow-xl card-item"
                data-aos="fade-up"
                data-aos-duration="3000">
                <div class="w-12 h-12 text-blue-600 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-blue-900 mb-4">Investment Banking</h3>
                <p class="text-gray-600 leading-relaxed">
                    Penyediaan solusi keuangan khusus, penjaminan emisi untuk go-public (IPO), penawaran terbatas Saham, dan penawaran Obligasi.
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="max-w-screen-xl mx-auto px-4 py-20">
        <div class="flex flex-col-reverse md:flex-row items-center md:items-start gap-6 md:gap-8">

            <!-- Kolom Teks -->
            <div class="flex-1 space-y-4 md:text-left">
                <h2 class="text-3xl md:text-4xl font-bold text-black">
                    Mulai Investasi Anda dengan <br>
                </h2>
                <p class="text-4xl md:text-5xl font-bold text-black">#BPOT</p>
                <p class="text-lg text-gray-600 mt-4">Berinvestasi kini dimulai dari genggaman anda!</p>

                <!-- List Fitur Vertikal dengan Ikon SVG -->
                <div class="space-y-8 mt-8">
                    <!-- Fitur 1: Aksesibel -->
                    <div class="flex items-start space-x-4">
                        <!-- Ikon SVG untuk Aksesibel -->
                        <div class="w-8 h-8 text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-semibold text-gray-800">Aksesibel</h3>
                            <p class="text-base text-gray-600 leading-relaxed">
                                Aplikasi trading BPOT yang tersedia di berbagai platform mulai dari Desktop, iOS maupun Android.
                            </p>
                        </div>
                    </div>

                    <!-- Fitur 2: Kenyamanan -->
                    <div class="flex items-start space-x-4">
                        <!-- Ikon SVG untuk Kenyamanan -->
                        <div class="w-8 h-8 text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-semibold text-gray-800">Kenyamanan</h3>
                            <p class="text-base text-gray-600 leading-relaxed">
                                Integrasi antara sistem front dan end BPOT disertai end to end encryption menjamin keamanan dari seluruh informasi Nasabah.
                            </p>
                        </div>
                    </div>

                    <!-- Fitur 3: Hemat Biaya -->
                    <div class="flex items-start space-x-4">
                        <!-- Ikon SVG untuk Hemat Biaya -->
                        <div class="w-8 h-8 text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="space-y-2">
                            <h3 class="text-xl font-semibold text-gray-800">Hemat Biaya</h3>
                            <p class="text-base text-gray-600 leading-relaxed">
                                Dengan kehadiran Online Trading #BPOT, Nasabah tidak perlu lagi khawatir terhadap fee tinggi dan jumlah deposit yang besar.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Kolom Gambar -->
            <div class="flex-1 w-full max-w-[560px] relative flex md:mr-0 sm:mr-25 md:mx-0">
                <img
                    src="{{ asset('landing-page/images/logo-chart-hp.png') }}"
                    alt="Layanan Kami"
                    class="w-full h-auto transform transition-transform duration-300 hover:scale-102">
            </div>
        </div>
        <a href="{{ url('https://bpot.co.id/') }}" target="_blank" rel="noopener noreferrer">
                        <button class="mt-4 px-6 py-3 bg-blue-600 text-white text-lg font-semibold rounded-lg hover:bg-blue-700 transition  md:item-left item-center">
                            Unduh BPOT Sekarang !
                        </button>
                    </a>
    </div>
</section>

<div class="max-w-screen-xl mx-auto px-4 py-12">
    <!-- Modal Kerja Bersih -->
    <div class="bg-white rounded-xl shadow-lg p-8 mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">
            Dengan Modal Kerja Bersih yang Disesuaikan Sebanyak
        </h2>
        <div class="bg-blue-50 p-6 rounded-lg flex items-center justify-between">
            <div>
                <p class="text-5xl font-bold text-blue-600">70 Miliar</p>
                <p class="text-sm text-gray-600 mt-2">
                    Berdasarkan periode 5 tahun terakhir pada periode 2020-2024, Modal Kerja Bersih Disesuaikan (MKBD) masing-masing berkisar antara Rp55-85 Miliar.
                </p>
            </div>
            <div class="w-16 h-16 text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Perkembangan Nasabah -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Nasabah Individu -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-4xl font-bold text-blue-600">4,619</p>
                    <p class="text-lg text-gray-600 mt-2">Nasabah Individu</p>
                </div>
                <div class="w-12 h-12 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Nasabah Institusi -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-4xl font-bold text-blue-600">223</p>
                    <p class="text-lg text-gray-600 mt-2">Nasabah Institusi</p>
                </div>
                <div class="w-12 h-12 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: 'Selamat Datang! 🎉',
            html: '<p class="text-gray-600 mb-4">Dapatkan penawaran khusus untuk investor baru!</p>',
            icon: 'info',
            showCancelButton: false,
            confirmButtonText: 'Mulai Sekarang',
            confirmButtonColor: '#2563eb', // Warna biru Tailwind
            customClass: {
                popup: 'swal2-popup-custom rounded-xl',
                title: 'swal2-title-custom text-2xl font-bold text-gray-800',
                htmlContainer: 'swal2-html-custom',
                confirmButton: 'swal2-confirm-custom px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors'
            },
            timer: 3000, // Otomatis tutup setelah 3 detik (opsional)
            allowOutsideClick: false
        });
    });
</script>
@endsection