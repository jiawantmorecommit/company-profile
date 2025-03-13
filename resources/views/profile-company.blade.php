@extends('layouts-guest.navigation')
@section('content')
<div class="bg-white">
    <div class="relative overflow-hidden bg-gradient-to-r from-blue-900 to-blue-600">
        <!-- SVG Background Elements -->
        <div class="absolute inset-0 z-0">
            <!-- Line Chart Pattern -->
            <svg class="absolute bottom-0 right-0 opacity-20 w-48 md:w-auto" width="574" height="364" viewBox="0 0 574 364" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 363.5L27.5 327L54.5 294L82 256.5L109 221.5L136.5 190L164 156.5L191.5 125L218.5 94.5L246 62L273.5 34L300.5 6.5" stroke="white" stroke-width="2" stroke-linejoin="round" />
                <path d="M315 363.5L342.5 327L369.5 294L397 256.5L424 221.5L451.5 190L479 156.5L506.5 125L533.5 94.5L561 62L588.5 34L615.5 6.5" stroke="white" stroke-width="2" stroke-linejoin="round" />
            </svg>

            <!-- Building Icon -->
            <svg class="absolute top-1/4 left-4 md:left-10 opacity-10 w-16 h-16 md:w-24 md:h-24" width="120" height="120" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1">
                <path d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16m14 0H5m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 5h1m4-5h1m-1 5h1m-5 5h5" />
            </svg>

            <!-- Shield Icon -->
            <svg class="absolute top-12 right-12 md:top-20 md:right-20 opacity-15 w-12 h-12 md:w-16 md:h-16" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="py-12 md:py-24">
                <div class="relative">
                    <!-- Main Text -->
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-4 md:mb-6 relative z-10">
                        PT. Bumiputera Sekuritas
                    </h1>

                    <!-- Animated Circle Graphic -->
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

<!-- Company Overview -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
    <div class="max-w-4xl">
        <div class="flex items-center gap-3 mb-12">
            <!-- Ikon Judul -->
            <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
            <h2 class="text-3xl font-semibold text-gray-900">Tentang Kami</h2>
        </div>

        <div class="space-y-8">
            <!-- Poin 1 -->
            <div class="flex gap-5">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    PT Bumiputera Sekuritas adalah Perusahaan Penyedia Jasa Keuangan di bidang Pasar Modal yang melayani Nasabah individu maupun institusi berdasarkan izin Badan Pengawas Pasar Modal/Otoritas Jasa Keuangan (OJK) nomor KEP 158/PM/1991 tanggal 5 Desember 1991, izin usaha di Bidang Pedagang Perantara Efek dan KEP 157/PM/1991 tanggal 5 Desember 1991, izin usaha di Bidang Penjamin Emisi Efek.
                </p>
            </div>

            <!-- Poin 2 -->
            <div class="flex gap-5">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Perusahaan melakukan inovasi dengan meluncurkan produk online trading berupa aplikasi perdagangan saham yang berbasis teknologi yang diberi nama Bumiputera Online Trading ("BPOT"). Online trading ini bertujuan untuk meningkatkan layanan kepada nasabah berupa sistem transaksi saham secara online dan diharapkan dapat meningkatkan jumlah Nasabah individu serta meningkatkan nilai transaksi.
                </p>
            </div>

            <!-- Poin 3 -->
            <div class="flex gap-5">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    Perusahaan berkomitmen untuk terus memperluas dan memperkokoh partisipasi dalam mengembangkan Pasar Modal Indonesia yang dibuktikan dengan terus berkembangnya jumlah Nasabah, baik Nasabah individu maupun institusi. Perusahaan terus mengembangkan diri dan memberikan layanan terbaik bagi Nasabah sesuai Visi dan Misi sebagai Perusahaan dengan layanan terbaik di Industri Pasar Modal Indonesia.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Services -->
<div class="bg-gray-50 border-y border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="max-w-4xl">
            <div class="flex items-center gap-3 mb-12">
                <!-- Ikon Judul -->
                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                </svg>
                <h2 class="text-3xl font-semibold text-gray-900">Our Services</h2>
            </div>

            <div class="grid md:grid-cols-2 gap-x-12 gap-y-8">
                <!-- Layanan 1 -->
                <div class="group flex gap-5 p-5 hover:bg-white hover:shadow-lg transition-all rounded-xl">
                    <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center group-hover:bg-blue-200 transition-colors">
                        <svg class="w-8 h-8 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 22h18M5 18h14M6 10l3-6 3 6M12 4v16M9 14h6M3 6h2.5a1.5 1.5 0 0 1 1.5 1.5V10" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">Securities Brokerage</h3>
                        <p class="text-gray-600">Comprehensive securities brokerage services for both individual and institutional investors.</p>
                    </div>
                </div>

                <!-- Layanan 2 -->
                <div class="group flex gap-5 p-5 hover:bg-white hover:shadow-lg transition-all rounded-xl">
                    <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center group-hover:bg-green-200 transition-colors">
                        <svg class="w-8 h-8 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 14l9-5-9-5-9 5 9 5zM12 14v6m0 0l-3-3m3 3l3-3m3 3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">Underwriting</h3>
                        <p class="text-gray-600">Professional underwriting services for companies seeking to raise capital in the public markets.</p>
                    </div>
                </div>

                <!-- Layanan 3 -->
                <div class="group flex gap-5 p-5 hover:bg-white hover:shadow-lg transition-all rounded-xl">
                    <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-orange-100 flex items-center justify-center group-hover:bg-orange-200 transition-colors">
                        <svg class="w-8 h-8 text-orange-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 18v-6m0 0V6m0 6h6m-6 0H6M3 3h18a2 2 0 012 2v14a2 2 0 01-2 2H3a2 2 0 01-2-2V5a2 2 0 012-2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">Online Trading</h3>
                        <p class="text-gray-600">Bumiputera Online Trading (BPOT) platform for convenient, secure, and efficient stock trading.</p>
                    </div>
                </div>

                <!-- Layanan 4 -->
                <div class="group flex gap-5 p-5 hover:bg-white hover:shadow-lg transition-all rounded-xl">
                    <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-purple-100 flex items-center justify-center group-hover:bg-purple-200 transition-colors">
                        <svg class="w-8 h-8 text-purple-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            <path d="M12 7h.01M16 7h.01M8 7h.01" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-medium text-gray-900 mb-3">Investment Advisory</h3>
                        <p class="text-gray-600">Expert guidance and advice to help clients make informed investment decisions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Organizational Structure -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
    <div class="max-w-4xl">
        <h2 class="text-3xl font-semibold text-gray-900 mb-12" data-aos="fade-up">Leadership</h2>
        <div class="space-y-16">
            <div>
                <h3 class="text-xl font-medium text-gray-900 mb-8 border-b border-gray-200 pb-3" data-aos="fade-up">
                    Board of Commissioners
                </h3>
                <div class="space-y-12">
                    <div class="flex flex-col gap-8 md:gap-12 md:flex-row md:items-center" data-aos="fade-right">
                        <div class="w-full md:w-1/2">
                            <div class="relative h-64 rounded-2xl overflow-hidden bg-gradient-to-r from-white to-blue-800">
                                <div class="absolute inset-0">
                                    <img
                                        src="{{ asset('landing-page/hero/M. Mufti Mubarok.png') }}"
                                        alt=""
                                        class="w-50 object-cover rounded-2xl" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                                </div>
                                <div class="absolute bottom-4 right-4 text-white">
                                    <h4 class="text-2xl font-bold">M. Mufti Mubarok</h4>
                                    <p class="text-blue-200">Komisaris Utama</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 md:pl-8">
                            <p class="text-gray-600 leading-relaxed">Bergabung dengan Bumiputera Sekuritas sejak tahun 2024, Bapak Muhammad Mufti Mubarok telah memulai karirnya sejak tahun 1994 hingga saat ini di Lembaga Pemerintahan Republik Indonesia pada bidang Organisasi Masyarakat, UMKM, Hukum, dan bidang Advokasi area Perlindungan Konsumen.
                            <p>
                                
                            <div class="mt-4 flex gap-3">
                                <a href="#" class="text-blue-600 hover:text-blue-800">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                    </svg>
                                </a>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Member 2 -->
                    <div class="flex flex-col gap-8 md:gap-12 md:flex-row-reverse md:items-center" data-aos="fade-left">
                        <div class="w-full md:w-1/2">
                            <div class="relative h-64 rounded-2xl overflow-hidden bg-gradient-to-r from-white to-blue-800">
                                
                                <div class="absolute inset-0">
                                    <img
                                        src="{{ asset('landing-page/hero/Linus Suseno.png') }}"
                                        alt=""
                                        class="w-50 object-cover rounded-2xl" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                                </div>
                                <div class="absolute bottom-4 right-4 text-white text-right">
                                    <h4 class="text-2xl font-bold">Linus N. Suseno</h4>
                                    <p class="text-green-200">Komisaris Independen</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 md:pr-8">
                            <p class="text-gray-600 leading-relaxed">
                                Bergabung dengan Bumiputera Sekuritas sejak tahun 2024, Bapak Linus N. Suseno telah memulai karirnya sejak tahun 1990 hingga saat ini di industri Tambang & Perminyakan yang kemudian diikuti dengan pengalaman industri Keuangan lainnya selama 15 tahun, dan di industri Pasar Modal Indonesia selama 9 tahun.</p>
                            
                            <div class="mt-4 flex gap-3 justify-end">
                                <a href="#" class="text-green-600 hover:text-green-800">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div>
                <h3 class="text-xl font-medium text-gray-900 mb-8 border-b border-gray-200 pb-3" data-aos="fade-up">
                    Board of Directors
                </h3>

                <div class="space-y-12">
                    
                    <div class="flex flex-col gap-8 md:gap-12 md:flex-row md:items-center" data-aos="fade-right" data-aos-delay="100">
                        <div class="w-full md:w-1/2">
                            <div class="relative h-64 rounded-2xl overflow-hidden bg-gradient-to-r from-white to-blue-800">
                                <!-- Tempat Foto -->
                                <div class="absolute inset-0">
                                    <img
                                        src="{{ asset('landing-page/hero/Ahmad Subagja.png') }}"
                                        alt=""
                                        class="w-50 object-cover rounded-2xl" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                                </div>
                                <div class="absolute bottom-4 right-4 text-white">
                                    <h4 class="text-2xl font-bold">Ahmad Subagja</h4>
                                    <p class="text-orange-200">Direktur Utama</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 md:pr-8">
                            <p class="text-gray-600 leading-relaxed">
                                Bergabung dengan Bumiputera Sekuritas sejak tahun 2012, Bapak Ahmad Subagja telah memulai karirnya sejak tahun 1997 hingga saat ini di industri Pasar Modal dengan total pengalaman selama 28 tahun dalam jabatannya pada posisi Direktur selama 23 tahun.</p>
                            <div class="mt-4 flex gap-3 justify-start">
                                <a href="#" class="text-green-600 hover:text-green-800">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                   
                    <div class="flex flex-col gap-8 md:gap-12 md:flex-row-reverse md:items-center" data-aos="fade-left" data-aos-delay="100">
                        <div class="w-full md:w-1/2">
                            <div class="relative h-64 rounded-2xl overflow-hidden bg-gradient-to-r from-white to-blue-800">
                                <div class="absolute inset-0">
                                    <img
                                        src="{{ asset('landing-page/hero/Hidayat Nasution.png') }}"
                                        class="w-50 object-cover rounded-2xl" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                                </div>
                                <div class="absolute bottom-4 right-4 text-white text-right">
                                    <h4 class="text-2xl font-bold">Hidayat Nasution</h4>
                                    <p class="text-purple-200">Direktur</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-1/2 md:pr-8">
                            <p class="text-gray-600 leading-relaxed">
                                Bergabung dengan Bumiputera Sekuritas sejak tahun 2023, Bapak Hidayat Nasution telah memulai karirnya sejak tahun 1994 hingga saat ini diawali sebagai Auditor selama 8 tahun, kemudian diikuti dengan karir pada industri Perbankan selama 17 tahun, dan menjabat sebagai Direktur di Badan Usaha Milik Daerah (BUMD) bidang Perkebunan di daerah Sumatera, Indonesia selama 3 tahun.</p>
                            <!-- Social Links -->
                            <div class="mt-4 flex gap-3 justify-end">
                                <a href="#" class="text-green-600 hover:text-green-800">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="bg-gray-50 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20">
        <div class="max-w-4xl">
            <h2 class="text-3xl font-semibold text-gray-900 mb-8">Contact Us</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="space-y-4">
                    <p class="text-gray-600">For inquiries about our services or to schedule a consultation, please contact us using the information below:</p>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span class="text-gray-600">[Phone Number]</span>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="text-gray-600">[Email Address]</span>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-gray-600">[Office Address]</span>
                    </div>
                </div>
                <div>
                    <a href="#" class="inline-block bg-gray-900 text-white font-medium py-3 px-6 rounded-sm hover:bg-gray-800 transition duration-300">Contact Our Team</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include ('layouts-guest.footer')
@endsection