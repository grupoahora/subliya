@extends('layouts.subliyamaster')


@section('css')
@endsection

{{-- @section('header')
    <!-- header nav y primera sección -->
    <header>
        <nav class="navbar navbar-expand-lg  round-subliya-header">
            <div class="container"><a class="navbar-brand" href="#">
                    <!-- <img src="{{ asset(config('adminlte.logo_img')) }}" height="79" width="116"> -->
                    <img src="{{ asset('img/LOGO.png') }}" alt="" width="120" height="auto"
                        class="d-inline-block align-text-top">
                </a>


                <div class="bars__menu" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="line1__bars-menu"></span>
                    <span class="line2__bars-menu"></span>
                    <span class="line3__bars-menu"></span>
                </div>
                <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link mx-1 active style-subliya-text" aria-current="page"
                                href="#QuienesSomos">¿Quienes Somos?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-1 style-subliya-text" href="#Servicios">Servicios</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link mx-1  style-subliya-text" href="#Disenos">Diseños</a>
                        </li>
                    </ul>
                    <form class="d-flex me-auto display-destock-search" role="search" id="search-header">
                        <button class="btn btn-outline-success  display-destock-search" type="submit"><img
                                src="{{ asset('svg/magnifying-glass.svg') }}" alt=""></button>
                        <input class="form-control me-auto display-destock-search" type="search" placeholder="Search"
                            aria-label="Search">
                    </form>
                    <a href="#s" class="mx-1 display-destock-search">
                        <img src="{{ asset('svg/configure.svg') }}" width="60px" height="auto" alt="">
                    </a>
                </div>
            </div>
        </nav>
    </header>
@endsection --}}
@section('contentbody')
    <div class="container-fluid" id="diseno-section">
        <div class="row flex-lg-row justify-content-between ">
            <div class="col-10 col-lg-2  bg-disenos my-2 my-lg-0 ">
                <h4 class=" text-white my-2">{{ $designdetail->name }}</h4>
            </div>
            <div class="col-10 col-lg-2 ms-auto  bg-disenos-volver my-2 my-lg-0 ">
                <a class="my-2 text-white" href="{{ url()->previous() }}"  rel="noopener noreferrer">Volver Atrás</a>
            </div>
        </div>
        <div class="row justify-content-center align-items-center g-2 card-diseno-detail mt-2">
            <div class="col-12 col-lg-3 col-xl-2 mb-auto">
                <h4 class="fw-bold d-none d-lg-block">
                    REF: {{ $designdetail->reference }}
                </h4>
                @foreach ($designdetail->records as $record)
                    @if ($loop->first)
                        <img src="../{{ $record->url }}" alt="">
                    @endif
                @endforeach

            </div>
            <div class="col-12 mx-auto mx-lg-0 col-lg-5 info-detail h-auto ">
                <div class="row  justify-content align-items-center g-2">
                    <div class="card diseno-detail  bg-transparent ">
                        <h3 class="card-title fw-bold text-center text-lg-end">{{ strtoupper($designdetail->name) }}</h3>
                        <div class="card-body">
                            <div class="row justify-content-center align-items-center  g-2 mx-1">
                                {{-- <div class="col-6  mb-auto diseno-detail-border-one ">
                                    <h4 class="text-start fw-bold  mt-2">
                                        ESPECIFICACIONES
                                    </h4>
                                    <p class="text-start">
                                        @if (!isset(explode(' ', $design->description, 15)[14]))
                                            {!! $design->description !!}
                                        @endif
                                        @if (isset(explode(' ', $design->description, 15)[14]))
                                            @for ($i = 0; $i < 14; $i++)
                                                {!! explode(' ', $design->description, 15)[$i] !!}
                                            @endfor
                                            <span id="oculto{{ $design->id }}" class="d-none">
                                                {!! explode(' ', $design->description, 15)[14] !!}
                                            </span>
                                        @endif

                                    </p>
                                </div> --}}
                                @foreach ($designdetail->attributes as $key => $attribute)
                                    @if ($loop->even)
                                        <div class="col-6 diseno-detail-border-two  mb-auto ">
                                            <h4 class="text-start fw-bold  mt-2 ">
                                                {{ strtoupper($attribute->name) }}
                                            </h4>
                                            <p class="text-start">
                                                {{ $attribute->pivot->attroptions }}
                                            </p>
                                        </div>
                                        <hr class="" style="color: #000; opacity: 1; border: #000 1px solid;">
                                    @endif
                                    @if ($loop->odd)
                                        <div class="col-6 mb-auto  diseno-detail-border-one mo-auto ">
                                            <h4 class="text-start fw-bold  mt-2">
                                                {{ strtoupper($attribute->name) }}
                                            </h4>
                                            <p class="text-start">
                                                {{ $attribute->pivot->attroptions }}
                                            </p>
                                        </div>
                                    @endif
                                @endforeach

                                {{-- <div class="col-6 diseno-detail-border-four">
                                    <h4 class="text-start fw-bold  mt-2">
                                        TAMAÑO
                                    </h4>
                                    <p class="text-start"> corrupti id, magni
                                        iure. Voluptates cum deserunt doloremque blanditiis animi maxime.</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="row description-diseno-detail description-diseno-detail-destock mt-4 me-lg-5 me-0  justify-content-center align-items-center g-2">
                    <div class="card py-2 px-4 m-0 bg-transparent border-0">
                        <div class="card-body">
                            <p class="card-text fw-bolder ">
                                {{ $designdetail->description }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        {{-- <div class="row description-diseno-detail description-diseno-detail-mobile mt-2 me-lg-5 me-0  justify-content-center align-items-center g-2">
            <div class="card py-2 px-4 m-0 bg-transparent border-0">
                <div class="card-body">
                    <p class="card-text fw-bolder ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
                        voluptatibus mollitia quibusdam deserunt dolore, aut quis voluptatem natus culpa
                        delectus totam qui sunt magni adipisci at ullam maiores iure. A.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae
                        voluptatibus mollitia quibusdam deserunt dolore, aut quis voluptatem natus culpa
                        delectus totam qui sunt magni adipisci at ullam maiores iure. A.
                    </p>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
@section('js')
@endsection
