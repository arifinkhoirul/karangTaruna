<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karang Taruna</title>

    {{-- ? google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    {{-- <link href="{{ asset('boostrap-file/css/bootstrap.min.css') }} " rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> --}}

    <link rel="shortcut icon" href="{{ asset('mazer/assets/compiled/svg/favicon.svg"') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/iconly.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    {{-- <style type="text/css">
        .warna-footer {
            background-color: rgb(242, 242, 242)
        }
    </style> --}}

    <style>
        .logo-slider:hover .animate-infinite-scroll {
            animation-play-state: paused;
        }
    </style>

    {{-- ? tailwind css via vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Navbar -->
    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary py-2">
        <div class="container-fluid">
            <!-- Logo kiri -->
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('user.homepage') }}">
                <img src="{{ asset('logo-karangtaruna.png') }}"
                    alt="Logo" width="50" height="50" class="">
                <span class="fw-bold">Karang Taruna</span>
            </a>

            <!-- Hamburger (offcanvas) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu normal di layar besar -->
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('user.homepage') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">lorem 1</a></li>
                            <li><a class="dropdown-item" href="#">Lorem 2</a></li>
                            <li><a class="dropdown-item" href="#">Lorem 3</a></li>
                            <li><a class="dropdown-item" href="#">Lorem 4</a></li>
                            <li><a class="dropdown-item" href="#">Lorem 5</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.pengurus') }}">Pengurus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.event') }}">Event</a>
                    </li>
                </ul>
            </div>

            <!-- Tombol login signup kanan -->
            <div class="d-none d-lg-flex">
                <a href="{{ route('register') }}" class="btn btn-outline-danger me-2">Sign Up</a>
                <a href="{{ route('login') }}" class="btn btn-danger">Login</a>
            </div>
        </div>
    </nav> --}}

    <!-- Offcanvas menu untuk mobile -->
    {{-- <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">lorem 1</a></li>
                            <li><a class="dropdown-item" href="#">Lorem 2</a></li>
                            <li><a class="dropdown-item" href="#">Lorem 3</a></li>
                            <li><a class="dropdown-item" href="#">Lorem 4</a></li>
                            <li><a class="dropdown-item" href="#">Lorem 5</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pengurus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Event</a>
                    </li>
            </ul>
            <hr>
            <div class="mt-3">
                <a href="{{ route('register') }}" class="btn btn-outline-danger w-100 mb-2">Sign Up</a>
                <a href="{{ route('login') }}" class="btn btn-danger w-100">Login</a>
            </div>
        </div>
    </div> --}}


    {{-- ? navigation --}}
    <header class="fixed top-0 w-full bg-bg1 shadow-md z-50">
        <div
            class="max-w-screen-3xl mx-auto flex justify-between items-center py-4 px-4 sm:px-10 min-h-[70px] tracking-wide">
            <div class="flex flex-wrap items-center justify-between gap-5 w-full">
                {{-- ? logo --}}
                <a href="{{ route('user.homepage') }}" class="max-sm:hidden flex items-center gap-2"><img
                        src="{{ asset('logo-karangtaruna.png') }}" alt="logo" class="w-14 max-md:w-12" />
                    <span class="capitalize text-textPrimary text-lg font-bold md:text-xl">karang taruna</span>
                </a>
                <a href="{{ route('user.homepage') }}" class="hidden max-sm:block"><img
                        src="{{ asset('logo-karangtaruna.png') }}" alt="logo" class="w-12" /></a>

                {{-- ? open menu --}}
                <div id="collapseMenu"
                    class="max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50">
                    <button id="toggleClose"
                        class="lg:hidden fixed top-5 right-5 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border border-gray-200 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-black"
                            viewBox="0 0 320.591 320.591">
                            <path
                                d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                                data-original="#000000"></path>
                            <path
                                d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                                data-original="#000000"></path>
                        </svg>
                    </button>

                    {{-- ? menu list --}}
                    <ul
                        class="lg:flex gap-x-4 max-lg:space-y-3 max-lg:fixed max-lg:bg-bg1 max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50">
                        <li class="mb-6 hidden max-lg:block">
                            <a href="{{ route('user.homepage') }}" class="flex items-center gap-2"><img
                                    src="{{ asset('logo-karangtaruna.png') }}" alt="logo"
                                    class="w-14 max-md:w-12" />
                                <span class="capitalize text-textPrimary text-lg font-bold md:text-xl">karang
                                    taruna</span>
                            </a>
                        </li>
                        <li class="max-lg:border-b max-lg:border-gray-300 max-lg:py-3 px-3">
                            <a href='{{ route('user.homepage') }}'
                                class="block font-normal text-[15px] hover:text-primary transition-all duration-500 ease-in-out {{ request()->routeIs('user.homepage') ? 'text-primary font-bold' : 'text-textSecondary' }}">Home</a>
                        </li>
                        <li class="relative max-lg:border-b max-lg:border-gray-300 max-lg:py-2 px-3 ">
                            <button id="pagesToggle"
                                class="text-textSecondary font-normal text-[15px] hover:text-primary transition-all duration-500 ease-in-out w-full text-left flex justify-between items-center">
                                Pages
                                <svg class="w-4 h-4 ml-2 transition-transform" id="pagesArrow" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            {{-- ? dropdown --}}
                            <ul id="pagesMenu"
                                class="absolute flex flex-col gap-1 p-4 left-0 mt-2 w-56 bg-bg1 shadow-[0_3px_10px_rgb(0,0,0,0.1)] max-lg:w-full rounded-md max-lg:p-0 lg:group-hover:block max-lg:static max-lg:mt-2 max-lg:shadow-none overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out">
                                <li>
                                    <a href="{{ route('user.data-remaja') }}"
                                        class="flex gap-3 px-4 py-2 text-textSecondary text-[15px] font-normal hover:bg-primary hover:text-bg1 hover:rounded-md transition-all duration-300 ease-in-out"><i
                                            class="bi bi-file-earmark-person-fill flex items-center"></i>
                                        Data Remaja
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.data-uang-kas') }}"
                                        class="flex gap-3 px-4 py-2 text-textSecondary text-[15px] font-normal hover:bg-primary hover:text-bg1 hover:rounded-md transition-all duration-300 ease-in-out"><i
                                            class="bi bi-cash-stack flex items-center"></i>
                                        Data Uang Kas
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.documentation') }}"
                                        class="flex gap-3 px-4 py-2 text-textSecondary text-[15px] font-normal hover:bg-primary hover:text-bg1 hover:rounded-md transition-all duration-300 ease-in-out"><i
                                            class="bi bi-file-earmark-image flex items-center"></i>
                                        Dokumentasi
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="max-lg:border-b max-lg:border-gray-300 max-lg:py-3 px-3"><a
                                href='{{ route('user.pengurus') }}'
                                class="block font-normal text-[15px] hover:text-primary transition-all duration-500 ease-in-out {{ request()->routeIs('user.pengurus') ? 'text-primary font-bold' : 'text-textSecondary' }}">Pengurus</a>
                        </li>
                        <li class="max-lg:border-b max-lg:border-gray-300 max-lg:py-3 px-3"><a
                                href='{{ route('user.blog') }}'
                                class="block font-normal text-[15px] hover:text-primary transition-all duration-500 ease-in-out {{ request()->routeIs('user.blog') ? 'text-primary font-bold' : 'text-textSecondary' }}">Blog</a>
                        </li>
                        <li class="max-lg:border-b max-lg:border-gray-300 max-lg:py-3 px-3"><a
                                href='{{ route('user.event') }}'
                                class="block font-normal text-[15px] hover:text-primary transition-all duration-500 ease-in-out {{ request()->routeIs('user.event') ? 'text-primary font-bold' : 'text-textSecondary' }}">Event</a>
                        </li>
                    </ul>
                </div>

                {{-- ? button login yang sudah login dan blm login --}}
                <div class="flex gap-3 max-md:gap-2">
                    
                    {{-- ? ketika sudah login --}}
                    <div class="relative hidden">
                        {{-- ? gambar profile --}}
                        <button id="profileBtn" class="w-12 h-12 rounded-full overflow-hidden border border-primary">
                            <img src="{{ asset('logo-karangtaruna.png') }}" alt="profile" class="w-full h-full object-cover">
                        </button>

                        {{-- ? dropdown menu profile --}}
                        <div id="profileMenu" class="absolute p-4 flex flex-col gap-3 right-0 bg-bg1 capitalize w-48 mt-3 text-textSecondary rounded-lg shadow-lg">
                            <a href="#" class="flex gap-3 px-4 py-2 hover:bg-primary hover:text-bg1 transition-all duration-300 ease-in-out rounded-lg"><i class="ri-user-5-fill"></i> edit profile</a>
                            <form method="POST" action="#" class="">
                                <button type="submit" class="w-full flex gap-3 px-4 py-2 rounded-lg hover:bg-primary hover:text-bg1 transition-all duration-300 ease-in-out"><i class="ri-logout-circle-r-line"></i> logout</button>
                            </form>
                        </div>
                    </div>

                    {{-- ? ketika belum login --}}
                    <div class="flex gap-3 max-md-gap-2">
                        <a href='{{ route('login') }}'
                            class="px-5 py-2 text-xs capitalize rounded-xl font-medium cursor-pointer tracking-wide text-primary border border-primary bg-transparent  hover:bg-primary hover:text-white transition-all duration-300 ease-in-out md:px-6 md:py-3 md:text-sm animate-wiggle">
                            login
                        </a>
                        <a href='{{ route('register') }}'
                            class="px-5 py-2 text-xs rounded-xl font-medium cursor-pointer tracking-wide text-white border border-primary bg-primary hover:bg-red-700 hover:border-red-700 transition-all duration-300 ease-in-out md:px-6 md:py-3 md:text-sm">Sign
                            up</a>
                    </div>

                    <button id="toggleOpen" class="lg:hidden cursor-pointer">
                        <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>



            </div>
        </div>
    </header>



    @yield('user_content')

    {{-- ? footer --}}
    <footer class="max-w-screen-3xl mx-auto flex flex-col border-t border-[#E4E6EE] pt-20 px-4 max-lg:pt-10 sm:px-10">
        {{-- ? box kesatu --}}
        <div class="flex flex-row justify-between gap-8 max-lg:flex-col max-lg:gap-4 pb-8 max-md:pb-6">
            <div class="flex flex-col gap-4 max-w-[400px] max-lg:max-w-full">
                <a href="javascript:void(0)" class="flex items-center gap-2"><img
                        src="{{ asset('logo-karangtaruna.png') }}" alt="logo" class="w-14 max-md:w-12" />
                    <span class="capitalize text-textPrimary text-lg font-bold md:text-xl">karang taruna</span>
                </a>
                <p class="text-textSecondary font-light max-md:text-base leading-relaxed">Ut enim ad minima veniam,
                    quis nostrum exercitationem ullam
                    corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
            </div>
            <div class="flex flex-col gap-4">
                <h4 class="text-xl text-textPrimary font-semibold capitalize">contact</h4>
                <p class="text-textSecondary font-light max-md:text-base leading-relaxed">+1 601-201-5580</p>
                <a href="#"
                    class="underline text-textSecondary font-light max-md:text-base leading-relaxed">ensome@info.co.us</a>
            </div>
            <div class="flex flex-col gap-4">
                <h4 class="text-xl text-textPrimary font-semibold capitalize">location</h4>
                <p class="text-textSecondary font-light max-md:text-base leading-relaxed">1642 Washington Avenue,
                    Jackson,
                    MS, Mississippi, 39201</p>
            </div>
            <div class="flex flex-col gap-4">
                <h4 class="text-xl text-textPrimary font-semibold capitalize">social media</h4>
                <div class="flex gap-4">
                    <a href="#">
                        <svg class="w-12 h-12 max-md:h-10 max-md:w-10 hover:opacity-80 transition-all duration-300 ease-in-out"
                            viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.5007 0.740234C8.69202 0.740234 0.740723 8.69154 0.740723 18.5002C0.740723 28.3089 8.69202 36.2602 18.5007 36.2602C28.3094 36.2602 36.2607 28.3089 36.2607 18.5002C36.2607 8.69154 28.3094 0.740234 18.5007 0.740234ZM22.7076 13.0131H20.0381C19.7217 13.0131 19.3702 13.4294 19.3702 13.9825V15.9102H22.7095L22.2044 18.6593H19.3702V26.9122H16.2197V18.6593H13.3614V15.9102H16.2197V14.2933C16.2197 11.9734 17.8292 10.0883 20.0381 10.0883H22.7076V13.0131V13.0131Z"
                                fill="#FE0000" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg class="w-12 h-12 max-md:h-10 max-md:w-10 hover:opacity-80 transition-all duration-300 ease-in-out"
                            viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.5007 0.740234C8.69202 0.740234 0.740723 8.69154 0.740723 18.5002C0.740723 28.3089 8.69202 36.2602 18.5007 36.2602C28.3094 36.2602 36.2607 28.3089 36.2607 18.5002C36.2607 8.69154 28.3094 0.740234 18.5007 0.740234ZM25.725 15.2886C25.7324 15.4403 25.7342 15.592 25.7342 15.74C25.7342 20.365 22.2174 25.6949 15.7831 25.6949C13.8818 25.698 12.0201 25.152 10.4218 24.1224C10.6937 24.1557 10.9731 24.1686 11.2561 24.1686C12.8952 24.1686 14.403 23.6118 15.5999 22.672C14.8705 22.6577 14.1637 22.4161 13.5781 21.981C12.9924 21.546 12.5571 20.939 12.3328 20.2448C12.8567 20.3444 13.3963 20.3235 13.9109 20.1837C13.1192 20.0236 12.4072 19.5947 11.8957 18.9695C11.3842 18.3444 11.1046 17.5616 11.1044 16.7538V16.7113C11.5762 16.9721 12.1164 17.1312 12.6899 17.1497C11.9476 16.6557 11.4222 15.8967 11.2211 15.028C11.0199 14.1594 11.1582 13.2467 11.6076 12.4766C12.4863 13.557 13.5821 14.4409 14.824 15.0709C16.0659 15.701 17.4263 16.0632 18.8171 16.1341C18.6403 15.3836 18.7164 14.5956 19.0335 13.8928C19.3507 13.19 19.8912 12.6117 20.571 12.2477C21.2508 11.8838 22.0318 11.7546 22.7925 11.8803C23.5533 12.006 24.2512 12.3796 24.7778 12.9428C25.5606 12.7879 26.3114 12.5008 26.9978 12.0937C26.7369 12.9042 26.1906 13.5925 25.4604 14.0306C26.1539 13.9471 26.831 13.7607 27.4695 13.4775C27.0005 14.1803 26.4097 14.7936 25.725 15.2886V15.2886Z"
                                fill="#FE0000" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg class="w-12 h-12 max-md:h-10 max-md:w-10 hover:opacity-80 transition-all duration-300 ease-in-out"
                            viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.4663 18.1913L17.3112 16.2525C16.9486 16.0841 16.6507 16.2728 16.6507 16.6743V20.3262C16.6507 20.7276 16.9486 20.9163 17.3112 20.748L21.4644 18.8092C21.8289 18.639 21.8289 18.3615 21.4663 18.1913ZM18.5007 0.740234C8.69202 0.740234 0.740723 8.69154 0.740723 18.5002C0.740723 28.3089 8.69202 36.2602 18.5007 36.2602C28.3094 36.2602 36.2607 28.3089 36.2607 18.5002C36.2607 8.69154 28.3094 0.740234 18.5007 0.740234ZM18.5007 25.7152C9.40982 25.7152 9.25072 24.8957 9.25072 18.5002C9.25072 12.1048 9.40982 11.2852 18.5007 11.2852C27.5916 11.2852 27.7507 12.1048 27.7507 18.5002C27.7507 24.8957 27.5916 25.7152 18.5007 25.7152Z"
                                fill="#FE0000" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg class="w-12 h-12 max-md:h-10 max-md:w-10 hover:opacity-80 transition-all duration-300 ease-in-out"
                            viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.9885 18.4662C19.0505 18.4437 19.1162 18.4268 19.1819 18.408C19.0153 18.0388 18.8407 17.6733 18.6581 17.3118C15.1292 18.3573 11.7505 18.3667 11.1479 18.3573C11.1423 18.4042 11.1423 18.4531 11.1423 18.5C11.1423 20.2738 11.7805 21.9782 12.9405 23.3166C13.3272 22.6934 15.377 19.6356 18.9885 18.4662ZM14.0386 24.3433C15.0596 25.1257 16.2681 25.6263 17.5433 25.795C18.8185 25.9636 20.1156 25.7945 21.3048 25.3044C20.96 23.4326 20.4435 21.5966 19.7619 19.8196C15.7806 21.2274 14.277 23.8778 14.0386 24.3433V24.3433ZM23.2964 12.9194C22.4288 12.1741 21.3994 11.6414 20.2899 11.3634C19.1804 11.0855 18.0214 11.07 16.9049 11.3183C17.8846 12.6492 18.7756 14.0431 19.5723 15.491C21.9806 14.5656 23.0693 13.231 23.2964 12.9194V12.9194ZM17.9467 15.9922C17.1377 14.5735 16.251 13.2005 15.2907 11.8795C14.2992 12.3626 13.4284 13.0614 12.7421 13.9247C12.0558 14.788 11.5714 15.794 11.3244 16.8688H11.3563C12.1184 16.8688 14.827 16.8069 17.9467 15.9922ZM21.3424 19.431C22.2152 21.8581 22.6169 23.8741 22.7314 24.5198C24.3311 23.3919 25.4175 21.675 25.7516 19.7464C24.7796 19.4703 23.7738 19.3307 22.7633 19.3315C22.279 19.3315 21.8004 19.3653 21.3424 19.431V19.431ZM18.5005 0.47998C8.54817 0.47998 0.480469 8.54769 0.480469 18.5C0.480469 28.4523 8.54817 36.52 18.5005 36.52C28.4528 36.52 36.5205 28.4523 36.5205 18.5C36.5205 8.54769 28.4528 0.47998 18.5005 0.47998ZM18.5005 27.3166C16.1624 27.3147 13.9206 26.3852 12.267 24.7323C10.6134 23.0794 9.68304 20.838 9.68005 18.5C9.68204 16.1613 10.612 13.9189 12.2657 12.2652C13.9194 10.6115 16.1618 9.68155 18.5005 9.67957C20.8387 9.68255 23.0803 10.6129 24.7335 12.2664C26.3867 13.92 27.3165 16.1617 27.319 18.5C27.3165 20.8379 26.3866 23.0793 24.7333 24.7322C23.0799 26.3852 20.8384 27.3147 18.5005 27.3166ZM20.2311 16.7618C20.3944 17.0997 20.5465 17.4319 20.6854 17.7585L20.8187 18.0776C21.3386 18.0157 21.8942 17.9857 22.4743 17.9857C23.6087 17.9879 24.7405 18.096 25.8549 18.3085C25.812 16.7097 25.2507 15.1682 24.2556 13.9161C23.9553 14.3028 22.7202 15.7238 20.2311 16.7618V16.7618Z"
                                fill="#FE0000" />
                        </svg>

                    </a>
                </div>
            </div>
        </div>

        {{-- ? box kedua --}}
        <div class="py-8 max-md:py-6 border-t border-[#E4E6EE]">
            <p class="text-center font-light text-textSecondary max-md:text-sm max-sm:text-xs">© 2025 Karang Taruna.
                All Rights Reserved.</p>
        </div>
    </footer>

    {{-- <footer class="container-fluid warna-footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4">
                                    <img class="ms-2" src="{{ asset('logo-karangtaruna.png') }}" alt="Logo"
                                        width="100" height="80">
                                </div>
                                <div class="col-8">
                                    <p class="fw-bold pt-4 fs-5">Karang Taruna</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <p class="fs-6 text-justify">ndustry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500s,
                                when an unknown printer took </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <ul class="list-unstyled ps-md-5">
                        <li class="fw-bold fs-5">Contacts</li>
                        <li class="mt-2">0882-0989-9878</li>
                        <li>lorem ipsum 3</li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <ul class="list-unstyled">
                        <li class="fw-bold fs-5">Location</li>
                        <li class="mt-2">Ujung Harapan Rt 05/05</li>
                        <li>Kab. Bekasi, Kec. Babelan, Kel. Bahagia</li>
                    </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <ul class="list-unstyled">
                        <li class="fw-bold fs-5">Social Media</li>
                        <li class="mt-2">
                            <a href="" class="btn btn-danger">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="" class="btn btn-danger">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="" class="btn btn-danger">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="" class="btn btn-danger">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> --}}


    {{-- <script src="{{ asset('boostrap-file/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script> --}}
    {{-- <script src="../node_modules/flyonui/flyonui.js"></script> --}}
</body>

</html>
