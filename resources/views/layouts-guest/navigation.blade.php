<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('landing-page/css/style.css') }}">
    @vite(['resources/js/app.js'])


</head>
<style>
    .popup-modal-content {
        animation: popup-enter 0.4s cubic-bezier(0.22, 1, 0.36, 1);
    }

    @keyframes popup-enter {
        from {
            transform: translate(-50%, -55%) scale(0.95);
            opacity: 0;
        }

        to {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }
    }

    /* Existing styles */
    #cards-container:hover .card-item:not(:hover) {
        filter: blur(4px);
        opacity: 0.8;
        transform: scale(0.98);
    }

    .card-item {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>

<body>


    <!-- Navbar -->
    <nav id="navbar" class="bg-transparent fixed w-full z-20 top-0 left-0 transition-colors duration-300">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-3">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-3">
                <img id="logo" src="{{ asset('landing-page/logo/Logo 1.png') }}"
                    class="h-10 w-auto transition-all duration-300"
                    alt="Company Logo">
            </a>

            <!-- Bagian Kanan -->
            <div class="flex md:order-2 items-center space-x-3">
                <a href="{{ route('login') }}" id="login-link"
                    class="hidden md:inline-flex text-white bg-blue-600 hover:bg-blue-700 transition-colors border border-blue-600 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 items-center">
                    Login
                </a>

                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <!-- Menu Utama -->
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-8 md:flex-row md:mt-0">
                    <!-- Home -->
                    <li>
                        <a href="/" id="nav-home"
                            class="block py-4 px-3 text-white rounded-sm hover:text-blue-600 transition-colors font-medium">
                            Home
                        </a>
                    </li>

                    <!-- Tentang Kami -->
                    <li class="dropdown relative">
                        <button id="nav-tentang" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-4 px-3 text-white rounded-sm hover:text-blue-600 transition-colors font-medium">
                            Tentang Kami
                            <svg class="w-2.5 h-2.5 ml-2 transition-transform" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownNavbar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-full md:w-44 border border-gray-100">
                            <ul class="py-2 text-sm text-gray-700">
                                <li>
                                    <a href="#" id="dropdown-profil" class="block px-4 py-3 hover:bg-gray-50">Profil Perusahaan</a>
                                </li>
                                <li>
                                    <a href="#" id="dropdown-laporan" class="block px-4 py-3 hover:bg-gray-50">Laporan Tahunan</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Informasi -->
                    <li class="dropdown relative">
                        <button id="nav-informasi" data-dropdown-toggle="dropdownNavbar2"
                            class="flex items-center justify-between w-full py-4 px-3 text-white rounded-sm hover:text-blue-600 transition-colors font-medium">
                            Informasi
                            <svg class="w-2.5 h-2.5 ml-2 transition-transform" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownNavbar2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-full md:w-44 border border-gray-100">
                            <ul class="py-2 text-sm text-gray-700">
                                <li>
                                    <a href="#" id="dropdown-info1" class="block px-4 py-3 hover:bg-gray-50">Artikel & Berita</a>
                                </li>
                                <li>
                                    <a href="{{ route('public.news.index') }}" id="dropdown-info2" class="block px-4 py-3 hover:bg-gray-50">Info 2</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Contact -->
                    <li>
                        <a href="#" id="nav-contact"
                            class="block py-4 px-3 text-white rounded-sm hover:text-blue-600 transition-colors font-medium">
                            Contact
                        </a>
                    </li>

                    <!-- Mobile Login -->

                </ul>
            </div>
        </div>
    </nav>

    @yield ('content')





    <script>
        window.addEventListener('scroll', function() {
            // Get all elements by ID
            const navbar = document.getElementById('navbar');
            const logo = document.getElementById('logo');
            const loginBtn = document.getElementById('login-link');

            // Navigation items
            const navHome = document.getElementById('nav-home');
            const navTentang = document.getElementById('nav-tentang');
            const navInformasi = document.getElementById('nav-informasi');
            const navContact = document.getElementById('nav-contact');

            // Dropdown items
            const dropdownProfil = document.getElementById('dropdown-profil');
            const dropdownLaporan = document.getElementById('dropdown-laporan');
            const dropdownInfo1 = document.getElementById('dropdown-info1');
            const dropdownInfo2 = document.getElementById('dropdown-info2');

            if (window.scrollY > 50) {
                // Scroll down state
                navbar.classList.remove('bg-transparent');
                navbar.classList.add('bg-white', 'shadow-sm');
                logo.src = "{{ asset('landing-page/logo/Logo 2.png') }}";

                // Navigation items
                [navHome, navTentang, navInformasi, navContact].forEach(item => {
                    item.classList.remove('text-white');
                    item.classList.add('text-gray-900');
                });

                // Dropdown items
                [dropdownProfil, dropdownLaporan, dropdownInfo1, dropdownInfo2].forEach(item => {
                    item.classList.remove('text-gray-700');
                    item.classList.add('text-gray-900');
                });

                // Login button styling
                loginBtn.classList.add('text-white');
                loginBtn.classList.remove('text-gray-900');

            } else {
                // Top state
                navbar.classList.add('bg-transparent');
                navbar.classList.remove('bg-white', 'shadow-sm');
                logo.src = "{{ asset('landing-page/logo/Logo 1.png') }}";

                // Navigation items
                [navHome, navTentang, navInformasi, navContact].forEach(item => {
                    item.classList.add('text-white');
                    item.classList.remove('text-gray-900');
                });

                // Dropdown items
                [dropdownProfil, dropdownLaporan, dropdownInfo1, dropdownInfo2].forEach(item => {
                    item.classList.add('text-gray-700');
                    item.classList.remove('text-gray-900');
                });
            }
        });

        // document.addEventListener('DOMContentLoaded', function() {
        //     Swal.fire({
        //         title: 'Selamat Datang! 🎉',
        //         html: '<p class="text-gray-600 mb-4">Dapatkan penawaran khusus untuk investor baru!</p>',
        //         icon: 'info',
        //         showCancelButton: false,
        //         confirmButtonText: 'Mulai Sekarang',
        //         confirmButtonColor: '#2563eb',
        //         customClass: {
        //             popup: 'swal2-popup-custom rounded-xl',
        //             title: 'swal2-title-custom text-2xl font-bold text-gray-800',
        //             htmlContainer: 'swal2-html-custom',
        //             confirmButton: 'swal2-confirm-custom px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors'
        //         },
        //         timer: 3000,
        //         allowOutsideClick: false
        //     });
        // });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>