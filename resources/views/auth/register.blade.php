<x-guest-layout>
    <div class="relative w-full h-screen flex items-center justify-center bg-gray-100">
        <!-- Video Background -->
        <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('videos/register.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="relative max-w-md w-full bg-white p-8 rounded-lg shadow-md z-10">
            <h2 class="text-2xl font-bold text-[#2BBCEE] text-center mb-6">{{ __('Register') }}</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-[#2BBCEE]">{{ __('Name') }}</label>
                    <input id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                    @error('name')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-[#2BBCEE]">{{ __('Email') }}</label>
                    <input id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                    @error('email')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-[#2BBCEE]">{{ __('Password') }}</label>
                    <input id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" type="password" name="password" required autocomplete="new-password">
                    @error('password')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-[#2BBCEE]">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" type="password" name="password_confirmation" required autocomplete="new-password">
                    @error('password_confirmation')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-[#61C6ED] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  hover:bg-[#2BBCEE] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>