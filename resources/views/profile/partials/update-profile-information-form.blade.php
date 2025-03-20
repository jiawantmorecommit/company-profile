<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <!-- Profile Picture -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <x-input-label for="profile_picture" :value="__('Profile Picture')" class="text-lg font-medium text-gray-900" />
            
            <div class="mt-4 flex flex-col sm:flex-row items-center sm:items-start gap-6">
                <!-- Profile Picture Preview -->
                <div class="relative group">
                    <div class="h-32 w-32 rounded-full overflow-hidden shadow-md border-2 border-white ring-2 ring-blue-100 transition-all duration-300 hover:ring-4 hover:ring-blue-200">
                        @if ($user->profile_picture)
                            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="{{ $user->name }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110">
                        @else
                            <div class="h-full w-full bg-gradient-to-br from-blue-100 to-blue-50 flex items-center justify-center text-blue-600 text-4xl font-bold transition-all duration-300 group-hover:from-blue-200 group-hover:to-blue-100">
                                {{ substr($user->name, 0, 1) }}
                            </div>
                        @endif
                    </div>
                </div>
                
                <!-- Upload Controls -->
                <div class="flex-1 space-y-4 w-full sm:w-auto">
                    <div class="flex justify-center sm:justify-start">
                        <label for="profile_picture" class="flex items-center gap-2 px-4 py-2.5 bg-white border border-gray-300 rounded-lg shadow-sm cursor-pointer hover:bg-gray-50 transition duration-200 group">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 group-hover:text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-sm font-medium text-gray-700 group-hover:text-gray-900">{{ __('Choose a file') }}</span>
                            <input id="profile_picture" name="profile_picture" type="file" class="sr-only" accept="image/jpeg,image/png,image/gif,image/jpg" onchange="updateFileName(this)">
                        </label>
                    </div>
                    
                    <div id="file-name-display" class="text-sm text-gray-500 text-center sm:text-left">
                        {{ __('No file selected') }}
                    </div>
                    
                    <div class="flex items-center text-xs text-gray-500 bg-blue-50 p-2 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500 mr-1.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ __('Accepts JPG, PNG or GIF (max. 2MB)') }}</span>
                    </div>
                    
                    <x-input-error class="mt-2" :messages="$errors->get('profile_picture')" />
                </div>
            </div>
        </div>
        
        <script>
            function updateFileName(input) {
                const fileNameDisplay = document.getElementById('file-name-display');
                if (input.files.length > 0) {
                    const fileName = input.files[0].name;
                    fileNameDisplay.textContent = fileName;
                    fileNameDisplay.classList.add('font-medium', 'text-blue-600');
                } else {
                    fileNameDisplay.textContent = '{{ __('No file selected') }}';
                    fileNameDisplay.classList.remove('font-medium', 'text-blue-600');
                }
            }
        </script>

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
