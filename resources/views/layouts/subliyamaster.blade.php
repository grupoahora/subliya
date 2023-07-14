<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @font-face {
            font-family: "Marvelan";
            src: url("{{ asset('fonts/Smiley.ttf') }}");
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    @yield('css')
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg  round-subliya-header">
        <div class="container">
            <a class="navbar-brand" href="{{ route('get.detail.all') }}#">
                <!-- <img src="{{ asset(config('adminlte.logo_img')) }}" height="79" width="116"> -->
                <img src="{{ asset('img/LOGO.webp') }}" alt="" width="100" height="auto"
                    class="d-inline-block ms-3 ms-lg-5  align-text-top">
            </a>


            <div class="bars__menu" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="line1__bars-menu"></span>
                <span class="line2__bars-menu"></span>
                <span class="line3__bars-menu"></span>
            </div>
            <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link  active style-subliya-text" aria-current="page"
                            href="{{ route('welcome') }}#QuienesSomos">¿Quienes Somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link style-subliya-text" href="{{ route('welcome') }}#Servicios">Servicios</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link   style-subliya-text" href="{{ route('get.detail.all') }}">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link style-subliya-text" href="{{ route('welcome') }}#Contacto">Contacto</a>
                    </li>
                    <li class="nav-item mx-4">

                        <form class="d-flex ms-auto display-destock-search" style="width: 200px" action="{{ route('get.by.name') }}" role="search"
                            method="get" id="search-header">
                            @csrf
                            <div class="input-group me-4  display-destock-search">
                                <button class="btn btn-outline-secondary p-0" type="submit" id="button-addon1" style="  opacity: 0.7;border-color: #3c2779"><img
                                    src="{{asset('svg/magnifying-glass.svg')}}" alt="" width="30px" height="auto"></button>
                                <input type="text" class="form-control" placeholder="Buscar Diseño" name="search"
                                    aria-label="Example text with button addon" aria-describedby="button-addon1">
                            </div>
                            {{-- <button class="btn btn-outline-success  display-destock-search" type="submit"><img
                                    src="svg/magnifying-glass.svg" alt=""></button>
                            <input class="form-group me-auto display-destock-search" type="search" name="search"
                                placeholder="Search" aria-label="Search"> --}}
                        </form>
                    </li>
                </ul>
                {{--   <a href="https://wa.me/message/3F33KG3IEVX5I1" target="_blank"
                        class="mx-1 display-destock-search">
                        <img src="{{ asset('img/wp.png') }}" width="60px" height="auto" alt="">
                    </a> --}}
            </div>
        </div>
    </nav>

    @yield('header')
    @yield('contentbody')

    <div class="footer bg-black ">
        <a href="https://www.instagram.com/subliyasd/" target="_blank" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-border icon-tabler-brand-instagram"
                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <rect x="4" y="4" width="16" height="16" rx="4" />
                <circle cx="12" cy="12" r="3" />
                <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
            </svg>



        </a>
        <p class="m-0 text-center text-white fs-4-cura-sm ">
            © Copyright 2023. Todos los derechos reservados Subliya. <br>
            Sitio web diseñado y desarrollado por manos Cucuteñas. <br>
            Hecho con ❤ <a class="text-danger" href="https://www.softwow.com.co">Softwow!</a>
        </p>
        <a href="https://web.facebook.com/subliyaSD" target="_blank" rel="noopener noreferrer" class="">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-border icon-tabler icon-tabler-brand-facebook"
                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
            </svg>
        </a>

    </div>
    <button id="back-to-top" class=" landing-back-top"><img src="{{ asset('img/wp.png') }}" width="60px"
            height="auto" alt=""></button>
    </div>
    <script src="{{ asset('js/jQuery-v3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/burger.js') }}"></script>
    {{-- <script src="{{ asset('js/jquery-2.2.1.min.js') }}"></script> --}}
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>

    <script>
        const wp = $('#back-to-top');
        wp.click(function() {
            window.open('https://wa.me/message/3F33KG3IEVX5I1', 'WhastApp Subliya');
        });
    </script>
    @yield('js')
    @stack('js')
</body>

</html>
