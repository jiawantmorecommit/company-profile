@extends('layouts.app')

@section('content')

<header class="bg-gradient-to-r from-white to-blue-50 shadow-sm">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
        </svg>
        <h1 class="text-2xl font-bold text-gray-900">Profile Settings</h1>
    </div>
</header>

<div class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Profile Header Card -->
        <div class="mb-10 p-6 bg-white rounded-xl shadow-md border border-gray-200">
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6">
                <div class="h-24 w-24 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-3xl font-bold shadow-inner">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <div class="flex-1">
                    <h2 class="text-2xl font-bold text-gray-800">{{ Auth::user()->name }}</h2>
                    <p class="text-gray-500">{{ Auth::user()->email }}</p>
                    <div class="mt-3 flex items-center text-sm text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Account active</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profile Setting Tabs -->
        <div class="bg-white shadow-md rounded-xl overflow-hidden border border-gray-200">
            <div class="flex border-b border-gray-200 bg-gray-50">
                <button onclick="openTab(event, 'personalInfo')" class="tab-button active-tab px-6 py-4 font-medium focus:outline-none">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Personal Information
                    </span>
                </button>
                <button onclick="openTab(event, 'security')" class="tab-button px-6 py-4 font-medium focus:outline-none">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        Security
                    </span>
                </button>
                <button onclick="openTab(event, 'danger')" class="tab-button px-6 py-4 font-medium focus:outline-none">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        Danger Zone
                    </span>
                </button>
            </div>

            <div id="personalInfo" class="tab-content p-6 block">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div id="security" class="tab-content p-6 hidden">
                @include('profile.partials.update-password-form')
            </div>

            <div id="danger" class="tab-content p-6 hidden">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>

<script>
    function openTab(evt, tabName) {
        // Declare all variables
        var i, tabcontent, tabbuttons;

        // Get all elements with class="tab-content" and hide them
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tab-button" and remove "active-tab" class
        tabbuttons = document.getElementsByClassName("tab-button");
        for (i = 0; i < tabbuttons.length; i++) {
            tabbuttons[i].classList.remove("active-tab");
        }

        // Show the current tab, and add "active-tab" class to the button that opened the tab
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.classList.add("active-tab");
    }
</script>

<style>
    .active-tab {
        color: #2563eb;
        border-bottom: 2px solid #2563eb;
        background-color: white;
    }
    .tab-button {
        color: #6b7280;
        border-bottom: 2px solid transparent;
        transition: all 0.3s ease;
    }
    .tab-button:hover:not(.active-tab) {
        color: #4b5563;
        background-color: #f9fafb;
        border-bottom: 2px solid #e5e7eb;
    }
</style>
@endsection