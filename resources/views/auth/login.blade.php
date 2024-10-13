<x-guest-layout>
    <div class="relative w-full min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <!-- Video Background -->
        <video autoplay muted loop class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('videos/login.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="relative max-w-md w-full bg-white p-8 rounded-lg shadow-md z-10">
            <h2 class="text-2xl font-bold text-[#61C6ED] text-center mb-6">{{ __('Log in') }}</h2>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-[#61C6ED]">{{ __('Email') }}</label>
                    <input id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                    @error('email')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-[#61C6ED]">{{ __('Password') }}</label>
                    <input id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" type="password" name="password" required autocomplete="current-password">
                    @error('password')
                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-4">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#61C6ED] shadow-sm focus:ring-indigo-500" name="remember">
                    <label for="remember_me" class="ml-2 block text-sm text-[#61C6ED]">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <div class="flex items-center justify-between mb-4">
                    @if (Route::has('password.request'))
                    <a class="text-sm text-black" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif
                </div>

                <div>
                    <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#61C6ED] hover:bg-[#2BBCEE] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Log in') }}
                    </button>
                </div>

                <div class="flex items-center justify-center mt-4">
                    <span class="text-sm text-gray-600">{{ __("Don't have an account?") }}</span>
                    <a href="{{ route('register') }}" class="text-sm text-[#61C6ED] hover:text-[#2BBCEE] ml-2">
                        {{ __('Register') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>