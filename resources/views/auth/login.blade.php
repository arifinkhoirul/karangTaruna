<x-guest-layout>
    <h2 class="text-3xl font-bold mb-6">Log In</h2>


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}


        <x-primary-button
            class="mt-4 w-full animate-bounce justify-center bg-red-500 hover:bg-red-600 text-white py-3 rounded-lg font-semibold">
            {{ __('Log In') }}
        </x-primary-button>


        <div class="mt-4 text-center">
            <p class="text-sm text-gray-500">
                Belum Punya Akun?
                <a href="{{ route('register') }}" class="text-red-500 font-semibold hover:underline">Register?</a>
            </p>
        </div>

        <div class="mt-10 text-left">
            <p class="text-sm text-gray-500">
                <a href="{{ route('user.homepage') }}"
                    class="py-3 px-4 rounded-lg font-semibold hover:bg-slate-600 bg-black text-white">Back To Web</a>
            </p>
        </div>
    </form>
</x-guest-layout>
