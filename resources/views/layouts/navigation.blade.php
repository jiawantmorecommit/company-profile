    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100 shadow-sm sticky top-0 z-50">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ url('/') }}" class="transform transition hover:scale-105">
                            <x-application-logo class="block h-8 w-auto fill-current text-blue-600" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-6 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                            class="group inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out">
                            <div class="flex items-center space-x-2 {{ request()->routeIs('dashboard') ? 'text-blue-600' : 'text-gray-500 group-hover:text-blue-600' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <span>{{ __('Dashboard') }}</span>
                            </div>
                            <div class="absolute inset-x-0 bottom-0 h-0.5 {{ request()->routeIs('dashboard') ? 'bg-blue-500' : 'bg-transparent group-hover:bg-blue-300' }} transform origin-left transition-all duration-200 ease-out"></div>
                        </x-nav-link>

                        <x-nav-link :href="route('admin.articles.index')" :active="request()->routeIs('admin.articles.index')"
                            class="group inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out">
                            <div class="flex items-center space-x-2 {{ request()->routeIs('admin.articles.index') ? 'text-blue-600' : 'text-gray-500 group-hover:text-blue-600' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                                <span>{{ __('Artikel') }}</span>
                            </div>
                            <div class="absolute inset-x-0 bottom-0 h-0.5 {{ request()->routeIs('admin.articles.index') ? 'bg-blue-500' : 'bg-transparent group-hover:bg-blue-300' }} transform origin-left transition-all duration-200 ease-out"></div>
                        </x-nav-link>

                        <x-nav-link :href="route('admin.news.index')" :active="request()->routeIs('admin.news.index')"
                            class="group inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out">
                            <div class="flex items-center space-x-2 {{ request()->routeIs('admin.news.index') ? 'text-blue-600' : 'text-gray-500 group-hover:text-blue-600' }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                                <span>{{ __('Berita') }}</span>
                            </div>
                            <div class="absolute inset-x-0 bottom-0 h-0.5 {{ request()->routeIs('admin.news.index') ? 'bg-blue-500' : 'bg-transparent group-hover:bg-blue-300' }} transform origin-left transition-all duration-200 ease-out"></div>
                        </x-nav-link>

                        <x-nav-link :href="route('admin.reports.index')" :active="request()->routeIs('admin.reports.index')"
                            class="group inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out">
                            <div class="flex items-center space-x-2 {{ request()->routeIs('admin.reports.index') ? 'text-blue-600' : 'text-gray-500 group-hover:text-blue-600' }}">
                             
                                <span>{{ __('Laporan') }}</span>
                            </div>
                            <div class="absolute inset-x-0 bottom-0 h-0.5 {{ request()->routeIs('admin.reports.index') ? 'bg-blue-500' : 'bg-transparent group-hover:bg-blue-300' }} transform origin-left transition-all duration-200 ease-out"></div>
                        </x-nav-link>

                        <x-nav-link :href="route('admin.management.direksi.index')" :active="request()->routeIs('admin.management.direksi.*')"
                            class="group inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out">
                            <div class="flex items-center space-x-2 {{ request()->routeIs('admin.management.direksi.*') ? 'text-blue-600' : 'text-gray-500 group-hover:text-blue-600' }}">
                             
                                <span>{{ __('Direksi') }}</span>
                            </div>
                            <div class="absolute inset-x-0 bottom-0 h-0.5 {{ request()->routeIs('admin.management.direksi.*') ? 'bg-blue-500' : 'bg-transparent group-hover:bg-blue-300' }} transform origin-left transition-all duration-200 ease-out"></div>
                        </x-nav-link>

                        <x-nav-link :href="route('admin.management.komisaris.index')" :active="request()->routeIs('admin.management.komisaris.*')"
                            class="group inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out">
                            <div class="flex items-center space-x-2 {{ request()->routeIs('admin.management.komisaris.*') ? 'text-blue-600' : 'text-gray-500 group-hover:text-blue-600' }}">
                             
                                <span>{{ __('Komisaris') }}</span>
                            </div>
                            <div class="absolute inset-x-0 bottom-0 h-0.5 {{ request()->routeIs('admin.management.komisaris.*') ? 'bg-blue-500' : 'bg-transparent group-hover:bg-blue-300' }} transform origin-left transition-all duration-200 ease-out"></div>
                        </x-nav-link>

                        <!-- Informasi Dropdown -->
                        <!-- Informasi Dropdown dengan x-nav-link -->
                        <div x-data="{ open: false }" class="">
                            <!-- Tombol utama "Informasi" -->
                            <x-nav-link
                                href="javascript:void(0)"
                                :active="request()->routeIs('admin.informasi.*')"
                                @click.prevent="open = !open"
                                @click.away="open = false"
                                class="group inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out">
                                <!-- Bagian teks + icon "Informasi" -->
                                <div class="flex items-center space-x-2
            {{ request()->routeIs('admin.informasi.*') 
                ? 'text-blue-600' 
                : 'text-gray-500 group-hover:text-blue-600' 
            }}">
                                    <!-- Icon "i" -->
                                        
                                    <span>{{ __('Informasi') }}</span>
                                    <!-- Icon panah dropdown -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 transform transition-transform duration-200"
                                        :class="{'rotate-180': open}" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>

                                <!-- Garis kecil di bawah item menu -->
                                <div class="absolute inset-x-0 bottom-0 h-0.5 
            {{ request()->routeIs('admin.informasi.*') 
                ? 'bg-blue-500' 
                : 'bg-transparent group-hover:bg-blue-300' 
            }} 
            transform origin-left transition-all duration-200 ease-out">
                                </div>
                            </x-nav-link>

                            <!-- Konten dropdown -->
                            <div x-show="open"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95"
                                class="absolute z-50 mt-2 w-56 rounded-md shadow-lg 
                bg-white ring-1 ring-black ring-opacity-5 py-1 
                divide-y divide-gray-100">
                                <!-- Link ke "Informasi Umum" -->
                                <a href="{{ route('admin.informasi.umum.index') }}"
                                    class="flex items-center space-x-2 px-4 py-2 text-sm 
                  text-gray-700 hover:bg-blue-50 hover:text-blue-600 
                  transition duration-150 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01
                         M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Informasi Umum</span>
                                </a>

                                <!-- Link ke "Informasi Tata Kelola" -->
                                <a href="{{ route('admin.informasi.tata-kelola.index') }}"
                                    class="flex items-center space-x-2 px-4 py-2 text-sm 
                  text-gray-700 hover:bg-blue-50 hover:text-blue-600 
                  transition duration-150 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016
                         A11.955 11.955 0 0112 2.944
                         a11.955 11.955 0 01-8.618 3.04
                         A12.02 12.02 0 003 9c0 5.591 
                         3.824 10.29 9 11.622 
                         5.176-1.332 9-6.03 9-11.622 
                         0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    <span>Informasi Tata Kelola</span>
                                </a>

                                <!-- Link ke "Informasi Nasabah" -->
                                <a href="{{ route('admin.informasi.nasabah.index') }}"
                                    class="flex items-center space-x-2 px-4 py-2 text-sm 
                  text-gray-700 hover:bg-blue-50 hover:text-blue-600 
                  transition duration-150 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 
                         00-5.356-1.857M17 20H7m10 
                         0v-2c0-.656-.126-1.283
                         -.356-1.857M7 20H2v-2a3 3 0 
                         015.356-1.857M7 20v-2
                         c0-.656.126-1.283.356
                         -1.857m0 0a5.002 5.002 0 
                         019.288 0M15 7a3 3 0 
                         11-6 0 3 3 0 016 0zm6 
                         3a2 2 0 11-4 0 2 2 0 
                         014 0zM7 10a2 2 0 11-4 0 
                         2 2 0 014 0z" />
                                    </svg>
                                    <span>Informasi Nasabah</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-blue-600 focus:outline-none transition ease-in-out duration-150">
                                <div class="flex items-center">
                                    @if (Auth::user()->profile_picture)
                                    <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}"
                                        alt="{{ Auth::user()->name }}"
                                        class="h-8 w-8 rounded-full object-cover border-2 border-blue-100">
                                    @else
                                    <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 border-2 border-blue-200">
                                        {{ substr(Auth::user()->name, 0, 1) }}
                                    </div>
                                    @endif
                                    <div class="ml-2">{{ Auth::user()->name }}</div>
                                </div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <div class="px-4 py-3 text-sm text-gray-500 border-b border-gray-100">
                                <div class="font-semibold text-gray-800">{{ Auth::user()->name }}</div>
                                <div class="text-xs">{{ Auth::user()->email }}</div>
                            </div>

                            <x-dropdown-link :href="route('profile.edit')"
                                class="flex items-center text-gray-600 hover:text-blue-600 hover:bg-blue-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="flex items-center text-red-600 hover:text-red-700 hover:bg-red-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:bg-blue-50 focus:text-blue-600 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                    class="flex items-center px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition duration-150 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('admin.articles.index')" :active="request()->routeIs('admin.articles.index')"
                    class="flex items-center px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition duration-150 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                    {{ __('Artikel') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('admin.news.index')" :active="request()->routeIs('admin.news.index')"
                    class="flex items-center px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition duration-150 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                    {{ __('Berita') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('admin.reports.index')" :active="request()->routeIs('admin.reports.index')"
                    class="flex items-center px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition duration-150 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    {{ __('Laporan') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('admin.management.direksi.index')" :active="request()->routeIs('admin.management.direksi.*')"
                    class="flex items-center px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition duration-150 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    {{ __('Direksi') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('admin.management.komisaris.index')" :active="request()->routeIs('admin.management.komisaris.*')"
                    class="flex items-center px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 transition duration-150 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    {{ __('Komisaris') }}
                </x-responsive-nav-link>

                <!-- Mobile Informasi Dropdown -->
                <div class="px-4 py-2" x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-gray-600 hover:text-blue-600 focus:outline-none transition duration-150 ease-in-out">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{ __('Informasi') }}
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform transition-transform duration-200" :class="{'rotate-180': open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="open" class="mt-2 space-y-1 pl-6">
                        <a href="{{ route('admin.informasi.umum.index') }}"
                            class="flex items-center px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-md transition duration-150 ease-in-out {{ request()->routeIs('admin.informasi.umum.index') ? 'bg-blue-50 text-blue-600' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Informasi Umum
                        </a>
                        <a href="{{ route('admin.informasi.tata-kelola.index') }}"
                            class="flex items-center px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-md transition duration-150 ease-in-out {{ request()->routeIs('admin.informasi.tata-kelola.index') ? 'bg-blue-50 text-blue-600' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            Informasi Tata Kelola
                        </a>
                        <a href="{{ route('admin.informasi.nasabah.index') }}"
                            class="flex items-center px-4 py-2 text-sm text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-md transition duration-150 ease-in-out {{ request()->routeIs('admin.informasi.nasabah.index') ? 'bg-blue-50 text-blue-600' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Informasi Nasabah
                        </a>
                    </div>
                </div>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @if (Auth::user()->profile_picture)
                    <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}"
                        alt="{{ Auth::user()->name }}"
                        class="h-10 w-10 rounded-full object-cover border-2 border-blue-100">
                    @else
                    <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 border-2 border-blue-200">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                    @endif
                    <div class="ml-3">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')"
                        class="flex items-center px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                            class="flex items-center px-4 py-2 text-red-600 hover:text-red-700 hover:bg-red-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </nav>