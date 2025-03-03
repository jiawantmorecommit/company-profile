<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

</head>

<body>

    <!-- NAVBAR MULAI -->
    <nav class="bg-white/80 backdrop-blur-md border-b border-gray-100 fixed w-full z-20 top-0 left-0 shadow-sm">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-3">
      <!-- Logo -->
      <a href="#" class="flex items-center space-x-3">
        <img 
          src="{{ asset('landing-page/logo/Logo 1.png') }}" 
          class="h-10 w-auto" 
          alt="Company Logo"
        >
        <!-- Jika ingin teks brand, bisa tambahkan:
        <span class="text-xl font-semibold">BP Sekuritas</span> -->
      </a>

      <!-- Bagian Kanan (Login & Hamburger) -->
      <div class="flex md:order-2 items-center space-x-3">
        <!-- Tombol Login (opsional) -->
        <button 
          type="button" 
          class="hidden md:inline-flex text-gray-900 hover:bg-gray-100 transition-colors border border-gray-300 focus:ring-2 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-6 py-2.5 items-center"
        >
          Login
        </button>
        <!-- Tombol Hamburger (mobile) -->
        <button 
          data-collapse-toggle="navbar-sticky" 
          type="button" 
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
          aria-controls="navbar-sticky"
          aria-expanded="false"
        >
          <span class="sr-only">Open main menu</span>
          <svg 
            class="w-5 h-5" 
            aria-hidden="true" 
            xmlns="http://www.w3.org/2000/svg" 
            fill="none" 
            viewBox="0 0 17 14"
          >
            <path 
              stroke="currentColor" 
              stroke-linecap="round" 
              stroke-linejoin="round" 
              stroke-width="2" 
              d="M1 1h15M1 7h15M1 13h15"
            />
          </svg>
        </button>
      </div>

      <!-- Menu Utama -->
      <div 
        class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" 
        id="navbar-sticky"
      >
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-8 md:flex-row md:mt-0">
          <!-- Home -->
          <li>
            <a 
              href="#" 
              class="block py-4 px-3 text-gray-900 rounded-sm hover:text-blue-600 transition-colors font-medium"
            >
              Home
            </a>
          </li>

          <!-- Tentang Kami -->
          <li class="relative">
            <button 
              id="dropdownNavbarLink" 
              data-dropdown-toggle="dropdownNavbar" 
              data-dropdown-placement="bottom-start" 
              class="flex items-center justify-between w-full py-4 px-3 text-gray-900 rounded-sm hover:text-blue-600 transition-colors font-medium"
            >
              Tentang Kami
              <svg 
                class="w-2.5 h-2.5 ml-2 transition-transform" 
                aria-hidden="true" 
                xmlns="http://www.w3.org/2000/svg" 
                fill="none" 
                viewBox="0 0 10 6"
              >
                <path 
                  stroke="currentColor" 
                  stroke-linecap="round" 
                  stroke-linejoin="round" 
                  stroke-width="2" 
                  d="m1 1 4 4 4-4"
                />
              </svg>
            </button>
            <!-- Dropdown Menu -->
            <div 
              id="dropdownNavbar" 
              class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-44 border border-gray-100"
            >
              <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownNavbarLink">
                <li>
                  <a href="#" class="block px-4 py-3 hover:bg-gray-50">Profil Perusahaan</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-3 hover:bg-gray-50">Laporan Tahunan</a>
                </li>
              </ul>
            </div>
          </li>

          <!-- Informasi -->
          <li class="relative">
            <button 
              id="dropdownNavbarLink2" 
              data-dropdown-toggle="dropdownNavbar2"
              data-dropdown-placement="bottom-start"
              class="flex items-center justify-between w-full py-4 px-3 text-gray-900 rounded-sm hover:text-blue-600 transition-colors font-medium"
            >
              Informasi
              <svg 
                class="w-2.5 h-2.5 ml-2 transition-transform" 
                aria-hidden="true" 
                xmlns="http://www.w3.org/2000/svg" 
                fill="none" 
                viewBox="0 0 10 6"
              >
                <path 
                  stroke="currentColor" 
                  stroke-linecap="round" 
                  stroke-linejoin="round" 
                  stroke-width="2" 
                  d="m1 1 4 4 4-4"
                />
              </svg>
            </button>
            <!-- Dropdown Menu -->
            <div 
              id="dropdownNavbar2" 
              class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-44 border border-gray-100"
            >
              <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownNavbarLink2">
                <li><a href="#" class="block px-4 py-3 hover:bg-gray-50">Profil Perusahaan</a></li>
                <li><a href="#" class="block px-4 py-3 hover:bg-gray-50">Laporan Tahunan</a></li>
                <!-- Tambahkan item lain sesuai kebutuhan -->
              </ul>
            </div>
          </li>

          <!-- Contact -->
          <li>
            <a 
              href="#" 
              class="block py-4 px-3 text-gray-900 rounded-sm hover:text-blue-600 transition-colors font-medium"
            >
              Contact
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>