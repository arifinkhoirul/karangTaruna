<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="{{ asset('boostrap-file/css/bootstrap.min.css') }} " rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{ asset('mazer/assets/compiled/svg/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('mazer/assets/compiled/css/iconly.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <style type="text/css">
        .warna-footer {
            background-color: rgb(242, 242, 242)
        }
    </style>
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary py-2">
        <div class="container-fluid">
            <!-- Logo kiri -->
            <a class="navbar-brand d-flex align-items-center" href="{{ route('user.homepage') }}">
                <img src="{{ asset('logo-karangtaruna.png') }}"
                    alt="Logo" width="85" height="70" class="">
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
    </nav>

    <!-- Offcanvas menu untuk mobile -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
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
    </div>



    @yield('user_content')



    <footer class="container-fluid warna-footer py-5">
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
    </footer>


    <script src="{{ asset('boostrap-file/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

</body>

</html>
