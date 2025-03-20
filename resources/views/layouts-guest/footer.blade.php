<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <footer class="relative w-full min-h-screen bg-[#000033] overflow-hidden">
        <!-- Decorative Wave SVG -->
        <div class="absolute top-0 left-0 w-full transform -translate-y-1">
            <svg viewBox="0 0 1440 320" class="w-full h-auto text-[#000033]">
                <path fill="currentColor" fill-opacity="1" d="M0,128L48,138.7C96,149,192,171,288,160C384,149,480,107,576,112C672,117,768,171,864,181.3C960,192,1056,160,1152,138.7C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20 relative z-10 min-h-[calc(100vh-200px)]">
            <!-- Logo Section -->
            <div class="flex justify-start mb-12">
                <img src="{{ asset('landing-page/logo/Logo 1.png') }}" alt="Company Logo" class="w-64 md:w-80 h-auto">
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12 text-white">
                <!-- Jakarta Section -->
                <div class="space-y-4">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Jakarta, Indonesia
                    </h3>
                    <p class="text-lg opacity-90 leading-relaxed">
                        PT. Bumiputera Sekuritas<br>
                        Wisma Bumiputera 17th Floor<br>
                        JL. Jend Sudirman Kav 75<br>
                        Jakarta 12910
                    </p>
                </div>

                <!-- Contact Section -->
                <div class="space-y-4">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Contact Us
                    </h3>
                    <div class="space-y-2">
                        <div>
                            <p class="text-xl font-semibold">Phone Number</p>
                            <a href="tel:02152960155" class="text-lg opacity-90 hover:opacity-100 transition-opacity">
                                (021) 5296 0155
                            </a>
                        </div>
                        <div>
                            <p class="text-xl font-semibold">Email</p>
                            <a href="mailto:cs.bpot@bumiputerasekritas.co.id" class="text-lg opacity-90 hover:opacity-100 transition-opacity">
                                cs.bpot@bumiputerasekritas.co.id
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Social Media Section -->
                <div class="space-y-4">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4 flex items-center">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                        </svg>
                        Social Media
                    </h3>
                    <div class="flex space-x-4">
                        <a href="https://www.linkedin.com/company/bumiputera-sekuritas" target="_blank" class="p-2 hover:bg-white/10 rounded-full transition-colors">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/bumiputerasekuritas" target="_blank" class="p-2 hover:bg-white/10 rounded-full transition-colors">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/BPSekuritas/" target="_blank" class="p-2 hover:bg-white/10 rounded-full transition-colors">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.877v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.461h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.987C18.343 21.128 22 16.991 22 12z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="md:col-span-3 mt-8">
                    <div class="text">PT Bumiputera Sekuritas berizin dan diawasi oleh Otoritas Jasa Keuangan (OJK) serta merupakan Peserta Anggota LAPS SJK</div>
                    <div class="flex flex-wrap gap-4 md:gap-6 justify-start mt-5">
                        <img src="{{ asset('landing-page/features/LAPS_SJK.png') }}" alt=""
                            class="w-12 h-8 md:w-[72px] md:h-[48px] object-contain flex-shrink-0">
                        <img src="{{ asset('landing-page/features/ISO_270001.png') }}" alt=""
                            class="w-12 h-8 md:w-[72px] md:h-[48px] object-contain flex-shrink-0">
                        <img src="{{ asset('landing-page/features/idx.png') }}" alt=""
                            class="w-12 h-8 md:w-[72px] md:h-[48px] object-contain flex-shrink-0">
                        <img src="{{ asset('landing-page/features/KSEI_.png') }}" alt=""
                            class="w-12 h-8 md:w-[72px] md:h-[48px] object-contain flex-shrink-0">
                        <img src="{{ asset('landing-page/features/ID_CLEAR.png') }}" alt=""
                            class="w-12 h-8 md:w-[72px] md:h-[48px] object-contain flex-shrink-0">
                        <img src="{{ asset('landing-page/features/INDONESIA_SIPF.png') }}" alt=""
                            class="w-12 h-8 md:w-[72px] md:h-[48px] object-contain flex-shrink-0">
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Section - Absolute Position -->
        <div class="absolute bottom-0 left-0 right-0 bg-[#000033] border-t border-white/20 py-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="text-white/70 text-sm text-center">
                    © 2025 Bumiputera Sekuritas. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>