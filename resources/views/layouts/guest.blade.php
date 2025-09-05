<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased" style="background-color: #FE2727">
    <div class="min-h-screen flex items-center justify-center bg-red-500">
        <div class="bg-white rounded-3xl shadow-xl flex flex-col md:flex-row overflow-hidden w-full max-w-4xl">
            <!-- Bagian Form -->
            <div class="w-full md:w-1/2 p-8">

                {{ $slot }}


                <!-- Lupa Password -->
                {{-- <div class="text-right mb-4">
                    <a href="#" class="text-sm text-gray-500 hover:underline">Lupa Password?</a>
                </div>

                <!-- Tombol Masuk -->
                <button class="w-full bg-red-500 hover:bg-red-600 text-white py-3 rounded-lg font-semibold">
                    Masuk
                </button> --}}

                <!-- Masuk Dengan -->
                {{-- <div class="mt-6 text-center">
                    <p class="text-gray-500">Masuk Dengan</p>
                    <div class="flex justify-center space-x-4 mt-3">
                        <button class="p-2 border rounded-full hover:bg-gray-100">
                            <i class="fab fa-facebook text-blue-600"></i>
                        </button>
                        <button class="p-2 border rounded-full hover:bg-gray-100">
                            <i class="fab fa-google text-red-500"></i>
                        </button>
                        <button class="p-2 border rounded-full hover:bg-gray-100">
                            <i class="fab fa-apple text-black"></i>
                        </button>
                    </div>
                </div> --}}

                <!-- Daftar -->

            </div>

            <!-- Bagian Gambar -->
            <div class="hidden md:block md:w-1/2 relative m-4">

                <img src="{{ request()->is('login') ? asset('uploads/img-auth/img-login.png') : asset('uploads/img-auth/img-register.png') }}" alt="Gambar"
                    class="object-cover h-full w-full brightness-75 rounded-3xl animate-wiggle">
            </div>
        </div>
    </div>
</body>

</html>
