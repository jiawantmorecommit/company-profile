<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('bpot-mini.png') }}">
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

    .navbar-hidden {
        transform: translateY(-100%);
        transition: transform 0.3s ease-in-out;
    }

    #navbar {
        transition: all 0.3s ease-in-out;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
    }

    .cursor {
        display: inline-block;
        width: 3px;
        background-color: black;
        margin-left: 4px;
        animation: blink 1s steps(2, start) infinite;
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }
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
                @auth
                <div class="relative">
                    <button id="user-menu-button" data-dropdown-toggle="userDropdown" class="hidden md:inline-flex items-center text-white bg-blue-600 hover:bg-blue-700 transition-colors border border-blue-600 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5">
                        <span>{{ Auth::user()->name }}</span>
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-44 border border-gray-100">
                        <ul class="py-2 text-sm text-gray-700">
                            <li>
                                <a href="{{ route('dashboard') }}" class="block px-4 py-3 hover:bg-gray-50">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-3 hover:bg-gray-50">Profile</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" class="block">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-3 hover:bg-gray-50">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                @else
                <a href="{{ route('login') }}" id="login-link"
                    class="hidden md:inline-flex text-white bg-blue-600 hover:bg-blue-700 transition-colors border border-blue-600 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 items-center">
                    Login
                </a>
                @endauth

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
                    <!-- <li class="dropdown relative">
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
                                    <a href="{{ route('profile-company') }}" id="dropdown-profil" class="block px-4 py-3 hover:bg-gray-50">Profil Perusahaan</a>
                                </li>
                                <li>
                                    <a href="#" id="dropdown-laporan" class="block px-4 py-3 hover:bg-gray-50">Laporan Tahunan</a>
                                </li>
                            </ul>
                        </div>
                    </li> -->

                    <li>
                        <a href="{{ route('profile-company') }}" id="nav-tentang"
                            class="block py-4 px-3 text-white rounded-sm hover:text-blue-600 transition-colors font-medium">
                            Tentang Kami
                        </a>
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
                                    <a href="{{ route('informasi.umum') }}" id="dropdown-info-umum" class="block px-4 py-3 hover:bg-gray-50">Informasi Umum</a>
                                </li>
                                <li>
                                    <a href="{{ route('informasi.tata-kelola') }}" id="dropdown-info-tata-kelola" class="block px-4 py-3 hover:bg-gray-50">Informasi Tata Kelola</a>
                                </li>
                                <li>
                                    <a href="{{ route('informasi.nasabah') }}" id="dropdown-info-nasabah" class="block px-4 py-3 hover:bg-gray-50">Informasi Nasabah</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Contact -->
                    <li>
                        <a href="#" id="nav-contact"
                            class="block py-4 px-3 text-white rounded-sm hover:text-blue-600 transition-colors font-medium">
                            Readable
                        </a>
                    </li>

                    

                    <!-- Mobile Login -->
                    <li class="md:hidden">
                        @auth
                        <div class="border-t border-gray-200 pt-4 mt-4">
                            <span class="block py-2 px-3 text-gray-500 font-medium">{{ Auth::user()->name }}</span>
                            <a href="{{ route('dashboard') }}" class="block py-2 px-3 text-gray-700 hover:text-blue-600 transition-colors">
                                Dashboard
                            </a>
                            <a href="{{ route('profile.edit') }}" class="block py-2 px-3 text-gray-700 hover:text-blue-600 transition-colors">
                                Profile
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left py-2 px-3 text-gray-700 hover:text-blue-600 transition-colors">
                                    Logout
                                </button>
                            </form>
                        </div>
                        @else
                        <a href="{{ route('login') }}" class="block py-2 px-3 text-gray-700 hover:text-blue-600 transition-colors font-medium">
                            Login
                        </a>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield ('content')


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let lastScroll = 0;

            const footer = document.querySelector('footer');
            const navbar = document.getElementById('navbar');

            if (!footer || !navbar) {
                console.error("Footer or navbar element not found");
                return;
            }

            window.addEventListener('scroll', function() {
                const logo = document.getElementById('logo');
                const loginBtn = document.getElementById('login-link');
                const userMenuBtn = document.getElementById('user-menu-button');
                const navHome = document.getElementById('nav-home');
                const navTentang = document.getElementById('nav-tentang');
                const navInformasi = document.getElementById('nav-informasi');
                const navContact = document.getElementById('nav-contact');
                const dropdownInfoUmum = document.getElementById('dropdown-info-umum');
                const dropdownInfoTataKelola = document.getElementById('dropdown-info-tata-kelola');
                const dropdownInfoNasabah = document.getElementById('dropdown-info-nasabah');

                if (window.scrollY > 50) {
                    navbar.classList.remove('bg-transparent');
                    navbar.classList.add('bg-white', 'shadow-sm');
                    logo.src = "{{ asset('landing-page/logo/Logo 2.png') }}";

                    [navHome, navTentang, navInformasi, navContact].forEach(item => {
                        if (item) {
                            item.classList.remove('text-white');
                            item.classList.add('text-gray-900');
                        }
                    });

                    [dropdownInfoUmum, dropdownInfoTataKelola, dropdownInfoNasabah].forEach(item => {
                        if (item) {
                            item.classList.remove('text-gray-700');
                            item.classList.add('text-gray-900');
                        }
                    });

                    if (loginBtn) {
                        loginBtn.classList.add('text-white');
                        loginBtn.classList.remove('text-gray-900');
                    }
                    
                    if (userMenuBtn) {
                        userMenuBtn.classList.add('text-white');
                        userMenuBtn.classList.remove('text-gray-900');
                    }
                } else {
                    navbar.classList.add('bg-transparent');
                    navbar.classList.remove('bg-white', 'shadow-sm');
                    logo.src = "{{ asset('landing-page/logo/Logo 1.png') }}";

                    [navHome, navTentang, navInformasi, navContact].forEach(item => {
                        if (item) {
                            item.classList.add('text-white');
                            item.classList.remove('text-gray-900');
                        }
                    });

                    [dropdownInfoUmum, dropdownInfoTataKelola, dropdownInfoNasabah].forEach(item => {
                        if (item) {
                            item.classList.add('text-gray-700');
                            item.classList.remove('text-gray-900');
                        }
                    });
                }

                const currentScroll = window.scrollY;
                const windowHeight = window.innerHeight;
                const documentHeight = document.documentElement.scrollHeight;
                const footerHeight = footer.offsetHeight;

                
                const approachingFooter = (documentHeight - windowHeight - currentScroll) < footerHeight;

                if (approachingFooter) {
                    
                    if (currentScroll > lastScroll) {
                        navbar.classList.add('navbar-hidden');
                    } else {
                        navbar.classList.remove('navbar-hidden');
                    }
                } else {
                    navbar.classList.remove('navbar-hidden');
                }

                lastScroll = currentScroll;
            });

            // Handle mobile menu
            const hamburgerBtn = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
            const mobileMenu = document.getElementById('navbar-sticky');
            
            if (hamburgerBtn && mobileMenu) {
                hamburgerBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        }); 

        document.addEventListener("DOMContentLoaded", function() {
            const text = "Bergabung dengan BPOT Sekarang !";
            const typingElement = document.getElementById('typing-effect');
            const cursorElement = document.querySelector('.cursor');
            let index = 0;
            let isDeleting = false;

            function type() {
                const currentText = typingElement.textContent;

                if (!isDeleting) {
                    typingElement.textContent = text.substring(0, index + 1);
                    index++;
                    if (index === text.length) {
                        isDeleting = true;
                        setTimeout(type, 1000);
                    } else {
                        setTimeout(type, 100);
                    }
                } else {
                    typingElement.textContent = currentText.substring(0, currentText.length - 1);
                    index--;

                    if (typingElement.textContent === "") {
                        isDeleting = false;
                        setTimeout(type, 500);
                    } else {
                        setTimeout(type, 50);
                    }
                }
            }

            if (typingElement) {
                type();
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>