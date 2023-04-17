@extends('layouts.subliyamaster')


@section('css')
@endsection

@section('header')
    <!-- header nav y primera sección -->
    {{-- <header>
        <nav class="navbar navbar-expand-lg  round-subliya-header">
            <div class="container"><a class="navbar-brand" href="#">
                    <!-- <img src="{{ asset(config('adminlte.logo_img')) }}" height="79" width="116"> -->
                    <img src="img/LOGO.png" alt="" width="120" height="auto" class="d-inline-block align-text-top">
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
                                src="svg/magnifying-glass.svg" alt=""></button>
                        <input class="form-control me-auto display-destock-search" type="search" placeholder="Search"
                            aria-label="Search">
                    </form>
                    <a href="#s" class="mx-1 display-destock-search">
                        <img src="svg/configure.svg" width="60px" height="auto" alt="">
                    </a>
                </div>
            </div>
        </nav>
    </header> --}}
@endsection
@section('contentbody')
    <div class="container-fluid " id="disenos-section">
        <div id="nav-bar-container " class="navbar-container slide-in-right">

            <div class="links d-flex flex-column justify-content-evenly align-items-center">
                <div class="d-flex flex-column justify-content-end align-items-center w-75 h-25">
                    <div class="bg-disenos text-center my-2 my-lg-0 w-100 ">
                        @if (isset($categoryselect))
                            <h4 class=" text-white  my-auto" id="titleDesignsByCategory"> {{ $categoryselect->name }}</h4>
                        @else
                            <h4 class=" text-white  my-auto" id="titleDesignsByCategory"> Diseños</h4>
                        @endif
                    </div>

                </div>
                <div class="d-flex flex-column justify-content-start align-items-center w-75 h-75">
                    <div class="me-auto py-4">
                        <label class="fw-bold py-2" for="filter">Filtrar Categoría:</label>
                        <select name="select-disenos" class="select-disenos" id="category_id" style="width: 100%"
                            name="" id="">
                            <optgroup label="Categorías">
                                @if (isset($categoryselect))
                                    <option value="" disabled>categoría</option>
                                @else
                                    <option value="" disabled selected>categoría</option>
                                @endif

                                @foreach ($categoriesweb as $category)
                                    @if (isset($categoryselect))
                                        @if ($categoryselect->id == $category->id)
                                            <option value="{{ $category->id }} " selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }} ">{{ $category->name }}</option>
                                        @endif
                                    @else
                                        <option value="{{ $category->id }} ">{{ $category->name }}</option>
                                    @endif
                                @endforeach

                            </optgroup>

                        </select>
                    </div>
                    <div class="">
                        <label class="fw-bold py-2" for="filter">Filtrar Sub-Categoría:</label>
                        <select name="select-disenos" class="select-disenos" id="subcategory_idsm" style="width: 100%"
                            name="" id="">
                            <optgroup label="Sub-Categorías">
                                @if (isset($categoryselect))
                                    <option value="" disabled>Sub-Categoría</option>
                                @else
                                    <option value="" disabled selected>Sub-Categoría</option>
                                @endif


                            </optgroup>

                        </select>
                    </div>
                    <div class="d-flex justify-content-end align-items-end w-100 py-4">
                        <div class=" icon-disenos">
                            <div class="icon-disenos-onsection mx-3 " id="icon-disenos-onsection"><svg viewBox="0 0 35 35"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.8335 32.7352H4.5835C4.01991 32.7352 3.47941 32.5113 3.08089 32.1128C2.68238 31.7143 2.4585 31.1738 2.4585 30.6102V26.3602C2.4585 25.7966 2.68238 25.2561 3.08089 24.8576C3.47941 24.4591 4.01991 24.2352 4.5835 24.2352H8.8335C9.39708 24.2352 9.93758 24.4591 10.3361 24.8576C10.7346 25.2561 10.9585 25.7966 10.9585 26.3602V30.6102C10.9585 31.1738 10.7346 31.7143 10.3361 32.1128C9.93758 32.5113 9.39708 32.7352 8.8335 32.7352ZM4.5835 26.3602V30.6102H8.8335V26.3602H4.5835Z"
                                        fill="" />
                                    <path
                                        d="M19.4585 32.7352H15.2085C14.6449 32.7352 14.1044 32.5113 13.7059 32.1128C13.3074 31.7143 13.0835 31.1738 13.0835 30.6102V26.3602C13.0835 25.7966 13.3074 25.2561 13.7059 24.8576C14.1044 24.4591 14.6449 24.2352 15.2085 24.2352H19.4585C20.0221 24.2352 20.5626 24.4591 20.9611 24.8576C21.3596 25.2561 21.5835 25.7966 21.5835 26.3602V30.6102C21.5835 31.1738 21.3596 31.7143 20.9611 32.1128C20.5626 32.5113 20.0221 32.7352 19.4585 32.7352ZM15.2085 26.3602V30.6102H19.4585V26.3602H15.2085Z"
                                        fill="" />
                                    <path
                                        d="M30.0835 32.7352H25.8335C25.2699 32.7352 24.7294 32.5113 24.3309 32.1128C23.9324 31.7143 23.7085 31.1738 23.7085 30.6102V26.3602C23.7085 25.7966 23.9324 25.2561 24.3309 24.8576C24.7294 24.4591 25.2699 24.2352 25.8335 24.2352H30.0835C30.6471 24.2352 31.1876 24.4591 31.5861 24.8576C31.9846 25.2561 32.2085 25.7966 32.2085 26.3602V30.6102C32.2085 31.1738 31.9846 31.7143 31.5861 32.1128C31.1876 32.5113 30.6471 32.7352 30.0835 32.7352ZM25.8335 26.3602V30.6102H30.0835V26.3602H25.8335Z"
                                        fill="" />
                                    <path
                                        d="M8.8335 22.1102H4.5835C4.01991 22.1102 3.47941 21.8863 3.08089 21.4878C2.68238 21.0893 2.4585 20.5488 2.4585 19.9852V15.7352C2.4585 15.1716 2.68238 14.6311 3.08089 14.2326C3.47941 13.8341 4.01991 13.6102 4.5835 13.6102H8.8335C9.39708 13.6102 9.93758 13.8341 10.3361 14.2326C10.7346 14.6311 10.9585 15.1716 10.9585 15.7352V19.9852C10.9585 20.5488 10.7346 21.0893 10.3361 21.4878C9.93758 21.8863 9.39708 22.1102 8.8335 22.1102ZM4.5835 15.7352V19.9852H8.8335V15.7352H4.5835Z"
                                        fill="" />
                                    <path
                                        d="M19.4585 22.1102H15.2085C14.6449 22.1102 14.1044 21.8863 13.7059 21.4878C13.3074 21.0893 13.0835 20.5488 13.0835 19.9852V15.7352C13.0835 15.1716 13.3074 14.6311 13.7059 14.2326C14.1044 13.8341 14.6449 13.6102 15.2085 13.6102H19.4585C20.0221 13.6102 20.5626 13.8341 20.9611 14.2326C21.3596 14.6311 21.5835 15.1716 21.5835 15.7352V19.9852C21.5835 20.5488 21.3596 21.0893 20.9611 21.4878C20.5626 21.8863 20.0221 22.1102 19.4585 22.1102ZM15.2085 15.7352V19.9852H19.4585V15.7352H15.2085Z"
                                        fill="" />
                                    <path
                                        d="M30.0835 22.1102H25.8335C25.2699 22.1102 24.7294 21.8863 24.3309 21.4878C23.9324 21.0893 23.7085 20.5488 23.7085 19.9852V15.7352C23.7085 15.1716 23.9324 14.6311 24.3309 14.2326C24.7294 13.8341 25.2699 13.6102 25.8335 13.6102H30.0835C30.6471 13.6102 31.1876 13.8341 31.5861 14.2326C31.9846 14.6311 32.2085 15.1716 32.2085 15.7352V19.9852C32.2085 20.5488 31.9846 21.0893 31.5861 21.4878C31.1876 21.8863 30.6471 22.1102 30.0835 22.1102ZM25.8335 15.7352V19.9852H30.0835V15.7352H25.8335Z"
                                        fill="" />
                                    <path
                                        d="M8.8335 11.4852H4.5835C4.01991 11.4852 3.47941 11.2613 3.08089 10.8628C2.68238 10.4643 2.4585 9.92381 2.4585 9.36023V5.11023C2.4585 4.54664 2.68238 4.00614 3.08089 3.60763C3.47941 3.20911 4.01991 2.98523 4.5835 2.98523H8.8335C9.39708 2.98523 9.93758 3.20911 10.3361 3.60763C10.7346 4.00614 10.9585 4.54664 10.9585 5.11023V9.36023C10.9585 9.92381 10.7346 10.4643 10.3361 10.8628C9.93758 11.2613 9.39708 11.4852 8.8335 11.4852ZM4.5835 5.11023V9.36023H8.8335V5.11023H4.5835Z"
                                        fill="" />
                                    <path
                                        d="M19.4585 11.4852H15.2085C14.6449 11.4852 14.1044 11.2613 13.7059 10.8628C13.3074 10.4643 13.0835 9.92381 13.0835 9.36023V5.11023C13.0835 4.54664 13.3074 4.00614 13.7059 3.60763C14.1044 3.20911 14.6449 2.98523 15.2085 2.98523H19.4585C20.0221 2.98523 20.5626 3.20911 20.9611 3.60763C21.3596 4.00614 21.5835 4.54664 21.5835 5.11023V9.36023C21.5835 9.92381 21.3596 10.4643 20.9611 10.8628C20.5626 11.2613 20.0221 11.4852 19.4585 11.4852ZM15.2085 5.11023V9.36023H19.4585V5.11023H15.2085Z"
                                        fill="" />
                                    <path
                                        d="M30.0835 11.4852H25.8335C25.2699 11.4852 24.7294 11.2613 24.3309 10.8628C23.9324 10.4643 23.7085 9.92381 23.7085 9.36023V5.11023C23.7085 4.54664 23.9324 4.00614 24.3309 3.60763C24.7294 3.20911 25.2699 2.98523 25.8335 2.98523H30.0835C30.6471 2.98523 31.1876 3.20911 31.5861 3.60763C31.9846 4.00614 32.2085 4.54664 32.2085 5.11023V9.36023C32.2085 9.92381 31.9846 10.4643 31.5861 10.8628C31.1876 11.2613 30.6471 11.4852 30.0835 11.4852ZM25.8335 5.11023V9.36023H30.0835V5.11023H25.8335Z"
                                        fill="" />
                                </svg></div>
                            <div class="icon-disenos-offsection" id="icon-disenos-offsection"><svg viewBox="0 0 34 34"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.88888 5.66666C2.93208 5.66666 3.77776 4.39814 3.77776 2.83333C3.77776 1.26853 2.93208 0 1.88888 0C0.84568 0 0 1.26853 0 2.83333C0 4.39814 0.84568 5.66666 1.88888 5.66666Z" />
                                    <path
                                        d="M1.88888 19.8333C2.93208 19.8333 3.77776 18.5648 3.77776 17C3.77776 15.4352 2.93208 14.1666 1.88888 14.1666C0.84568 14.1666 0 15.4352 0 17C0 18.5648 0.84568 19.8333 1.88888 19.8333Z" />
                                    <path
                                        d="M1.88888 33.9999C2.93208 33.9999 3.77776 32.7314 3.77776 31.1666C3.77776 29.6018 2.93208 28.3333 1.88888 28.3333C0.84568 28.3333 0 29.6018 0 31.1666C0 32.7314 0.84568 33.9999 1.88888 33.9999Z" />
                                    <path
                                        d="M32.2239 14.1666H9.33072C8.35012 14.1666 7.55518 15.359 7.55518 16.83V17.17C7.55518 18.6409 8.35012 19.8333 9.33072 19.8333H32.2239C33.2046 19.8333 33.9995 18.6409 33.9995 17.17V16.83C33.9995 15.359 33.2046 14.1666 32.2239 14.1666Z" />
                                    <path
                                        d="M32.2239 28.3333H9.33072C8.35012 28.3333 7.55518 29.5257 7.55518 30.9966V31.3366C7.55518 32.8075 8.35012 33.9999 9.33072 33.9999H32.2239C33.2046 33.9999 33.9995 32.8075 33.9995 31.3366V30.9966C33.9995 29.5257 33.2046 28.3333 32.2239 28.3333Z" />
                                    <path
                                        d="M32.2239 0H9.33072C8.35012 0 7.55518 1.19241 7.55518 2.66333V3.00333C7.55518 4.47425 8.35012 5.66666 9.33072 5.66666H32.2239C33.2046 5.66666 33.9995 4.47425 33.9995 3.00333V2.66333C33.9995 1.19241 33.2046 0 32.2239 0Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row flex-lg-row flex-column  d-lg-none">
            <div class=" bg-disenos text-center my-lg-0 mx-auto w-75">
                @if (isset($categoryselect))
                    <h4 class=" text-white my-auto" id="titleDesignsByCategory"> {{ $categoryselect->name }}</h4>
                @else
                    <h4 class=" text-white  my-auto" id="titleDesignsByCategory"> Diseños</h4>
                @endif
            </div>
            {{-- <div class="col-6 col-lg-2  bg-disenos my-2 my-lg-0 ">
                @if (isset($categoryselect))
                    <h4 class=" text-white  my-auto" id="titleDesignsByCategory"> {{ $categoryselect->name }}</h4>
                @else
                    <h4 class=" text-white  my-auto" id="titleDesignsByCategory"> Diseños</h4>
                @endif
            </div> --}}
            <div class="col-12 col-lg-4 ms-auto">
                <div class="row ">
                    <div class="col-6 col-lg-4 ms-auto  my-2">
                        <label class="fw-bold my-1" for="filter">Filtrar Categoría:</label>
                        <select name="select-disenos" class="select-disenos" id="category_id" style="width: 100%"
                            name="" id="">
                            <optgroup label="Categorías">
                                @if (isset($categoryselect))
                                    <option value="" disabled>categoría</option>
                                @else
                                    <option value="" disabled selected>categoría</option>
                                @endif

                                @foreach ($categoriesweb as $category)
                                    @if (isset($categoryselect))
                                        @if ($categoryselect->id == $category->id)
                                            <option value="{{ $category->id }} " selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }} ">{{ $category->name }}</option>
                                        @endif
                                    @else
                                        <option value="{{ $category->id }} ">{{ $category->name }}</option>
                                    @endif
                                @endforeach

                            </optgroup>

                        </select>
                    </div>
                    <div class="col-4 col-lg-3 me-lg-auto d-flex align-items-end">
                        <div class="icon-disenos-onsection" id="icon-disenos-onsection"><svg viewBox="0 0 35 35"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.8335 32.7352H4.5835C4.01991 32.7352 3.47941 32.5113 3.08089 32.1128C2.68238 31.7143 2.4585 31.1738 2.4585 30.6102V26.3602C2.4585 25.7966 2.68238 25.2561 3.08089 24.8576C3.47941 24.4591 4.01991 24.2352 4.5835 24.2352H8.8335C9.39708 24.2352 9.93758 24.4591 10.3361 24.8576C10.7346 25.2561 10.9585 25.7966 10.9585 26.3602V30.6102C10.9585 31.1738 10.7346 31.7143 10.3361 32.1128C9.93758 32.5113 9.39708 32.7352 8.8335 32.7352ZM4.5835 26.3602V30.6102H8.8335V26.3602H4.5835Z"
                                    fill="" />
                                <path
                                    d="M19.4585 32.7352H15.2085C14.6449 32.7352 14.1044 32.5113 13.7059 32.1128C13.3074 31.7143 13.0835 31.1738 13.0835 30.6102V26.3602C13.0835 25.7966 13.3074 25.2561 13.7059 24.8576C14.1044 24.4591 14.6449 24.2352 15.2085 24.2352H19.4585C20.0221 24.2352 20.5626 24.4591 20.9611 24.8576C21.3596 25.2561 21.5835 25.7966 21.5835 26.3602V30.6102C21.5835 31.1738 21.3596 31.7143 20.9611 32.1128C20.5626 32.5113 20.0221 32.7352 19.4585 32.7352ZM15.2085 26.3602V30.6102H19.4585V26.3602H15.2085Z"
                                    fill="" />
                                <path
                                    d="M30.0835 32.7352H25.8335C25.2699 32.7352 24.7294 32.5113 24.3309 32.1128C23.9324 31.7143 23.7085 31.1738 23.7085 30.6102V26.3602C23.7085 25.7966 23.9324 25.2561 24.3309 24.8576C24.7294 24.4591 25.2699 24.2352 25.8335 24.2352H30.0835C30.6471 24.2352 31.1876 24.4591 31.5861 24.8576C31.9846 25.2561 32.2085 25.7966 32.2085 26.3602V30.6102C32.2085 31.1738 31.9846 31.7143 31.5861 32.1128C31.1876 32.5113 30.6471 32.7352 30.0835 32.7352ZM25.8335 26.3602V30.6102H30.0835V26.3602H25.8335Z"
                                    fill="" />
                                <path
                                    d="M8.8335 22.1102H4.5835C4.01991 22.1102 3.47941 21.8863 3.08089 21.4878C2.68238 21.0893 2.4585 20.5488 2.4585 19.9852V15.7352C2.4585 15.1716 2.68238 14.6311 3.08089 14.2326C3.47941 13.8341 4.01991 13.6102 4.5835 13.6102H8.8335C9.39708 13.6102 9.93758 13.8341 10.3361 14.2326C10.7346 14.6311 10.9585 15.1716 10.9585 15.7352V19.9852C10.9585 20.5488 10.7346 21.0893 10.3361 21.4878C9.93758 21.8863 9.39708 22.1102 8.8335 22.1102ZM4.5835 15.7352V19.9852H8.8335V15.7352H4.5835Z"
                                    fill="" />
                                <path
                                    d="M19.4585 22.1102H15.2085C14.6449 22.1102 14.1044 21.8863 13.7059 21.4878C13.3074 21.0893 13.0835 20.5488 13.0835 19.9852V15.7352C13.0835 15.1716 13.3074 14.6311 13.7059 14.2326C14.1044 13.8341 14.6449 13.6102 15.2085 13.6102H19.4585C20.0221 13.6102 20.5626 13.8341 20.9611 14.2326C21.3596 14.6311 21.5835 15.1716 21.5835 15.7352V19.9852C21.5835 20.5488 21.3596 21.0893 20.9611 21.4878C20.5626 21.8863 20.0221 22.1102 19.4585 22.1102ZM15.2085 15.7352V19.9852H19.4585V15.7352H15.2085Z"
                                    fill="" />
                                <path
                                    d="M30.0835 22.1102H25.8335C25.2699 22.1102 24.7294 21.8863 24.3309 21.4878C23.9324 21.0893 23.7085 20.5488 23.7085 19.9852V15.7352C23.7085 15.1716 23.9324 14.6311 24.3309 14.2326C24.7294 13.8341 25.2699 13.6102 25.8335 13.6102H30.0835C30.6471 13.6102 31.1876 13.8341 31.5861 14.2326C31.9846 14.6311 32.2085 15.1716 32.2085 15.7352V19.9852C32.2085 20.5488 31.9846 21.0893 31.5861 21.4878C31.1876 21.8863 30.6471 22.1102 30.0835 22.1102ZM25.8335 15.7352V19.9852H30.0835V15.7352H25.8335Z"
                                    fill="" />
                                <path
                                    d="M8.8335 11.4852H4.5835C4.01991 11.4852 3.47941 11.2613 3.08089 10.8628C2.68238 10.4643 2.4585 9.92381 2.4585 9.36023V5.11023C2.4585 4.54664 2.68238 4.00614 3.08089 3.60763C3.47941 3.20911 4.01991 2.98523 4.5835 2.98523H8.8335C9.39708 2.98523 9.93758 3.20911 10.3361 3.60763C10.7346 4.00614 10.9585 4.54664 10.9585 5.11023V9.36023C10.9585 9.92381 10.7346 10.4643 10.3361 10.8628C9.93758 11.2613 9.39708 11.4852 8.8335 11.4852ZM4.5835 5.11023V9.36023H8.8335V5.11023H4.5835Z"
                                    fill="" />
                                <path
                                    d="M19.4585 11.4852H15.2085C14.6449 11.4852 14.1044 11.2613 13.7059 10.8628C13.3074 10.4643 13.0835 9.92381 13.0835 9.36023V5.11023C13.0835 4.54664 13.3074 4.00614 13.7059 3.60763C14.1044 3.20911 14.6449 2.98523 15.2085 2.98523H19.4585C20.0221 2.98523 20.5626 3.20911 20.9611 3.60763C21.3596 4.00614 21.5835 4.54664 21.5835 5.11023V9.36023C21.5835 9.92381 21.3596 10.4643 20.9611 10.8628C20.5626 11.2613 20.0221 11.4852 19.4585 11.4852ZM15.2085 5.11023V9.36023H19.4585V5.11023H15.2085Z"
                                    fill="" />
                                <path
                                    d="M30.0835 11.4852H25.8335C25.2699 11.4852 24.7294 11.2613 24.3309 10.8628C23.9324 10.4643 23.7085 9.92381 23.7085 9.36023V5.11023C23.7085 4.54664 23.9324 4.00614 24.3309 3.60763C24.7294 3.20911 25.2699 2.98523 25.8335 2.98523H30.0835C30.6471 2.98523 31.1876 3.20911 31.5861 3.60763C31.9846 4.00614 32.2085 4.54664 32.2085 5.11023V9.36023C32.2085 9.92381 31.9846 10.4643 31.5861 10.8628C31.1876 11.2613 30.6471 11.4852 30.0835 11.4852ZM25.8335 5.11023V9.36023H30.0835V5.11023H25.8335Z"
                                    fill="" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 ms-auto my-2">
                        <label class="fw-bold my-1" for="filter">Filtrar Sub-Categoría:</label>
                        <select name="select-disenos" class="select-disenos" id="subcategory_id" style="width: 100%"
                            name="" id="">
                            <optgroup label="Sub-Categorías">
                                @if (isset($categoryselect))
                                    <option value="" disabled>Sub-Categoría</option>
                                @else
                                    <option value="" disabled selected>Sub-Categoría</option>
                                @endif


                            </optgroup>

                        </select>
                    </div>
                    <div class="col-4 col-lg-3 me-lg-auto d-flex align-items-end">

                        <div class="icon-disenos-offsection" id="icon-disenos-offsection"><svg viewBox="0 0 34 34"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.88888 5.66666C2.93208 5.66666 3.77776 4.39814 3.77776 2.83333C3.77776 1.26853 2.93208 0 1.88888 0C0.84568 0 0 1.26853 0 2.83333C0 4.39814 0.84568 5.66666 1.88888 5.66666Z" />
                                <path
                                    d="M1.88888 19.8333C2.93208 19.8333 3.77776 18.5648 3.77776 17C3.77776 15.4352 2.93208 14.1666 1.88888 14.1666C0.84568 14.1666 0 15.4352 0 17C0 18.5648 0.84568 19.8333 1.88888 19.8333Z" />
                                <path
                                    d="M1.88888 33.9999C2.93208 33.9999 3.77776 32.7314 3.77776 31.1666C3.77776 29.6018 2.93208 28.3333 1.88888 28.3333C0.84568 28.3333 0 29.6018 0 31.1666C0 32.7314 0.84568 33.9999 1.88888 33.9999Z" />
                                <path
                                    d="M32.2239 14.1666H9.33072C8.35012 14.1666 7.55518 15.359 7.55518 16.83V17.17C7.55518 18.6409 8.35012 19.8333 9.33072 19.8333H32.2239C33.2046 19.8333 33.9995 18.6409 33.9995 17.17V16.83C33.9995 15.359 33.2046 14.1666 32.2239 14.1666Z" />
                                <path
                                    d="M32.2239 28.3333H9.33072C8.35012 28.3333 7.55518 29.5257 7.55518 30.9966V31.3366C7.55518 32.8075 8.35012 33.9999 9.33072 33.9999H32.2239C33.2046 33.9999 33.9995 32.8075 33.9995 31.3366V30.9966C33.9995 29.5257 33.2046 28.3333 32.2239 28.3333Z" />
                                <path
                                    d="M32.2239 0H9.33072C8.35012 0 7.55518 1.19241 7.55518 2.66333V3.00333C7.55518 4.47425 8.35012 5.66666 9.33072 5.66666H32.2239C33.2046 5.66666 33.9995 4.47425 33.9995 3.00333V2.66333C33.9995 1.19241 33.2046 0 32.2239 0Z" />
                            </svg>
                        </div>
                    </div>

                </div>



            </div>
        </div>

        <div class="mw-100 margin-sm">
            @if (isset($designsbycategorys))
                @if ($designsbycategorys->count() == 0)
                    <h2 class="text-center  pt-5">no se encontro diseños</h2>
                @else
                    <div
                        class="row justify-content-center align-items-center  card-group-disenos-width-5  card-group-disenos  mx-0  mx-lg-auto ">
                        @foreach ($designsbycategorys as $design)
                            <div class="col justify-content-center card-disenos card-disenos-width-quack"
                                id="card-disenos">
                                @if (count($design->records) == 0)
                                    <a class="my-auto" href="{{ route('get.detail.design', $design->id) }}">
                                        <img class="img-width-quack-destock animate" src="../img/default.png"
                                            alt="Card image cap">
                                    </a>
                                @else
                                    @foreach ($design->records as $record)
                                        @if ($loop->first)
                                            <a class="my-auto" href="{{ route('get.detail.design', $design->id) }}">
                                                <img class="img-width-quack-destock animate" src="../{{ $record->url }}"
                                                    alt="Card image cap">
                                            </a>
                                        @else
                                        @endif
                                    @endforeach
                                @endif

                                <div class="description d-none">
                                    <p class="text-center py-3">
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
                                    @push('js')
                                        <script>
                                            $(".btnVerMas{{ $design->id }}").click(function() {
                                                $('#oculto{{ $design->id }}').toggleClass('d-none');
                                            });
                                        </script>
                                    @endpush
                                </div>
                                <a class="description-vermas d-none "
                                    href="{{ route('get.detail.design', $design->id) }}">
                                    <svg fill="#fff" height="45px" width="45px" class="mx-2 "
                                        viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg">
                                        <g fill="">
                                            <path
                                                d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" />
                                            <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        @endforeach

                    </div>
                    <nav aria-label="Page navigation example  ">
                        <ul class="pagination mt-4 justify-content-center align-items-center" id="pagination">
                            @if ($designsbycategorys->currentPage() - 1 == 0)
                                @if (isset($busqueda))
                                    <li class="page-item"><a class="page-link"
                                            href="?page={{ $designsbycategorys->lastPage() }}&search={{ $busqueda }}">Anterior</a>
                                    </li>
                                @else
                                    <li class="page-item"><a class="page-link"
                                            href="?page={{ $designsbycategorys->lastPage() }}">Anterior</a>
                                    </li>
                                @endif
                            @else
                                @if (isset($busqueda))
                                    <li class="page-item"><a class="page-link"
                                            href="?page={{ $designsbycategorys->currentPage() - 1 }}&search={{ $busqueda }}">Anterior</a>
                                    </li>
                                @else
                                    <li class="page-item"><a class="page-link"
                                            href="?page={{ $designsbycategorys->currentPage() - 1 }}">Anterior</a>
                                    </li>
                                @endif
                            @endif
                            @for ($i = 1; $i <= $designsbycategorys->lastPage(); $i++)
                                @if (isset($busqueda))
                                    <li class="page-item"><a class="page-link"
                                            href="?page={{ $i }}&search={{ $busqueda }}">{{ $i }}</a>
                                    </li>
                                @else
                                    <li class="page-item"><a class="page-link"
                                            href="?page={{ $i }}">{{ $i }}</a>
                                    </li>
                                @endif
                            @endfor
                            {{-- <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
                    <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
                    <li class="page-item"><a class="page-link" href="?page=3">3</a></li> --}}
                            @if ($designsbycategorys->currentPage() == $designsbycategorys->lastPage())
                                @if (isset($busqueda))
                                    <li class="page-item"><a class="page-link"
                                            href="?page=1&search={{ $busqueda }}">Siguiente</a>
                                    </li>
                                @else
                                    <li class="page-item"><a class="page-link" href="?page=1">Siguiente</a>
                                    </li>
                                @endif
                            @else
                                @if (isset($busqueda))
                                    <li class="page-item"><a class="page-link"
                                            href="?page={{ $designsbycategorys->currentPage() + 1 }}&search={{ $busqueda }}">Siguiente</a>
                                    </li>
                                @else
                                    <li class="page-item"><a class="page-link"
                                            href="?page={{ $designsbycategorys->currentPage() + 1 }}">Siguiente</a>
                                    </li>
                                @endif
                            @endif

                        </ul>
                    </nav>
                @endif
            @else
                <div
                    class="row justify-content-center align-items-center  card-group-disenos-width-5  card-group-disenos  mx-0  mx-lg-auto ">
                    @foreach ($designsweb as $design)
                        <div class="col justify-content-center card-disenos card-disenos-width-quack" id="card-disenos">
                            @if (count($design->records) == 0)
                                <a class="my-auto" href="{{ route('get.detail.design', $design->id) }}">
                                    <img class="img-width-quack-destock animate" src="../img/default.png"
                                        alt="Card image cap">
                                </a>
                            @else
                                @foreach ($design->records as $record)
                                    @if ($loop->first)
                                        <a class="my-auto" href="{{ route('get.detail.design', $design->id) }}">
                                            <img class="img-width-quack-destock animate" src="../{{ $record->url }}"
                                                alt="Card image cap">
                                        </a>
                                    @else
                                    @endif
                                @endforeach
                            @endif

                            <div class="description  d-none">
                                <p class="text-center py-3">
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
                                @push('js')
                                    <script>
                                        $(".btnVerMas{{ $design->id }}").click(function() {
                                            $('#oculto{{ $design->id }}').toggleClass('d-none');
                                        });
                                    </script>
                                @endpush
                            </div>
                            <a class="description-vermas d-none " href="{{ route('get.detail.design', $design->id) }}">
                                <svg fill="#fff" height="45px" width="45px" class="mx-2 " viewBox="0 0 12 12"
                                    width="12" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="">
                                        <path
                                            d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" />
                                        <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    @endforeach

                </div>
                <nav aria-label="Page navigation example  ">
                    <ul class="pagination mt-4 justify-content-center align-items-center" id="pagination">
                        @if ($designsweb->currentPage() - 1 == 0)
                            <li class="page-item"><a class="page-link"
                                    href="?page={{ $designsweb->lastPage() }}">Anterior</a>
                            </li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="?page={{ $designsweb->currentPage() - 1 }}">Anterior</a>
                            </li>
                        @endif
                        @for ($i = 1; $i <= $designsweb->lastPage(); $i++)
                            <li class="page-item"><a class="page-link"
                                    href="?page={{ $i }}">{{ $i }}</a>
                            </li>
                        @endfor
                        {{-- <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
                    <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
                    <li class="page-item"><a class="page-link" href="?page=3">3</a></li> --}}
                        @if ($designsweb->currentPage() == $designsweb->lastPage())
                            <li class="page-item"><a class="page-link" href="?page=1">Siguiente</a>
                            </li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="?page={{ $designsweb->currentPage() + 1 }}">Siguiente</a>
                            </li>
                        @endif

                    </ul>
                </nav>
            @endif

        </div>
    </div>






    {{-- 
    </div> --}}

@endsection
@section('js')
    <script>
        /*  document.querySelector("#category_id").addEventListener("change", changeCategory); */

        function changeCategory(category) {
            /* const category = document.querySelector("#category_id"); */
            const subcategory = $('#subcategory_id');
            const subcategorysm = $('#subcategory_idsm');

            $.ajax({
                url: "{{ route('get.subcategoriesbycategoryunique') }}",
                method: 'GET',
                data: {
                    category: category.value,
                },
                success: function(data) {
                    console.log(subcategory);

                    subcategory.empty();
                    subcategorysm.empty();
                    subcategory.append(
                        '<option value="" disabled selected>Sub-Categoría</option>'
                    );
                    subcategorysm.append(
                        '<option value="" disabled selected>Sub-Categoría</option>'
                    );

                    $.each(data, function(index, element) {
                        subcategory.append(
                            '<option value="' + element.id + '">' + element.name +
                            '</option>'
                        );
                        subcategorysm.append(
                            '<option value="' + element.id + '">' + element.name +
                            '</option>'
                        );

                    })


                }
            });
        }
    </script>
    <script>
        $(document).on('change', '#category_id', (event), function() {
            /* console.log(event.target); */
            prueba(event.target);
            changeCategory(event.target);
        });
        $(document).on('change', '#subcategory_id', (event), function() {
            changebysubcategory(event.target);
        });
        $(document).on('change', '#subcategory_idsm', (event), function() {
            changebysubcategory(event.target);
        });
        /* document.querySelector(".select-disenos").addEventListener("change", prueba);
        document.querySelector("#subcategory_id").addEventListener("change", changebysubcategory);
        const asdasasdsd = $('.select-disenos');
        console.log(asdasasdsd.val); */
        /* asdasasdsd.change(function () {
        }); */
        function changebysubcategory(subcategory) {

            const carddisenos = $('.card-disenos');
            const disenosall = $('#disenosall');
            if (carddisenos.length >= 10) {
                disenosall.removeClass('disenosallporcent');
                disenosall.addClass('disenosallvh');
            } else if (carddisenos.length < 10) {
                disenosall.removeClass('disenosallvh');
                disenosall.addClass('disenosallporcent');
            }
            /* vars generales */
            var category = document.querySelector("#category_id");
            /* var subcategory = document.querySelector("#subcategory_id"); */

            var disenos = $('.card-group-disenos');
            var pagination = $('#pagination');
            var titleDesignsByCategory = $('#titleDesignsByCategory');
            var onsection = document.querySelector("#icon-disenos-onsection");
            var offsection = document.querySelector("#icon-disenos-offsection");
            /* bool-section */
            var boolonsection = onsection.classList.contains('icon-disenos-onsection');
            var booloffsection = offsection.classList.contains('icon-disenos-offsection');
            /* if true or false */
            if (boolonsection == true && booloffsection == true) {
                console.log(boolonsection, booloffsection);

                $.ajax({
                    url: "{{ route('get.designsbysubcategory') }}",
                    method: 'GET',
                    data: {
                        subcategory: subcategory.value,

                    },
                    success: function(datasub) {
                        console.log(datasub);
                        var current_page = parseInt(datasub.current_page);
                        var before_page = parseInt(datasub.current_page) - 1;
                        var after_page = parseInt(datasub.current_page) + 1;
                        if (before_page == 0) {
                            before_page = datasub.last_page;
                        } else {
                            before_page = parseInt(datasub.current_page) - 1;
                        }
                        if (after_page > datasub.last_page) {
                            after_page = 1;
                        } else {
                            after_page = parseInt(datasub.current_page) + 1;
                        }

                        disenos.empty();
                        titleDesignsByCategory.empty();
                        titleDesignsByCategory.append('' + subcategory.options[subcategory.selectedIndex].text +
                            '');
                        $.each(datasub.data, function(index, element) {
                            const description = element.description.split(' ');
                            var descriptionelementfirst = [];
                            for (let idescriptionfirst = 0; idescriptionfirst <
                                14; idescriptionfirst++) {
                                descriptionelementfirst += description[idescriptionfirst] + ' ';

                            }
                            var descriptionelementlast = [];
                            for (let idescriptionlast = 16; idescriptionlast <= description
                                .length; idescriptionlast++) {
                                descriptionelementlast += description[idescriptionlast] + ' ';

                            }
                            if (element.records.length == 0) {
                                var record = 'img/default.png';
                            } else {
                                var record = element.records[0].url;
                            }
                            disenos.append(
                                '<div class="col justify-content-center card-disenos card-disenos-width-quack" id="card-disenos">' +
                                '<a class="my-auto" href="/get_detail_design/' + element.id +
                                '"><img class="img-width-quack-destock animate" src="../' + record +
                                '" alt="Card image cap"></a>' +
                                '<div class="description  d-none"><p class="text-center py-3">' +
                                descriptionelementfirst +
                                '</p> </div><a class="description-vermas d-none " href="/get_detail_design/' +
                                element.id +
                                '"><svg fill="#fff" height="45px" width="45px" class="mx-2 "  viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><g fill=""> <path d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" /> <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" /></g></svg></a></div>'
                            );
                            $(".btnVerMas" + element.id).click(function() {
                                console.log($("#oculto" + element.id).toggleClass('d-none'));

                            });
                        });
                        pagination.empty();
                        $.each(datasub.links, function(index, element) {
                            if (index == 0) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    before_page + ',' + subcategory.value +
                                    ') ">Anterior</button></li>'
                                );
                            } else if (index == datasub.links.length - 1) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    after_page + ',' + subcategory.value +
                                    ') ">Siguiente</button></li>'
                                );
                            } else {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    element.label + ',' + subcategory.value + ') ">' + element
                                    .label +
                                    '</button></li>'
                                );
                            }

                            /*  console.log(element); */

                        });


                    }

                });
            } else {
                console.log(boolonsection, booloffsection);
                $.ajax({
                    url: "{{ route('get.designsbysubcategory') }}",
                    method: 'GET',
                    data: {
                        subcategory: subcategory.value,

                    },
                    success: function(datasub) {
                        console.log(datasub);
                        var current_page = parseInt(datasub.current_page);
                        var before_page = parseInt(datasub.current_page) - 1;
                        var after_page = parseInt(datasub.current_page) + 1;
                        if (before_page == 0) {
                            before_page = datasub.last_page;
                        } else {
                            before_page = parseInt(datasub.current_page) - 1;
                        }
                        if (after_page > datasub.last_page) {
                            after_page = 1;
                        } else {
                            after_page = parseInt(datasub.current_page) + 1;
                        }

                        disenos.empty();
                        titleDesignsByCategory.empty();
                        titleDesignsByCategory.append('' + subcategory.options[subcategory.selectedIndex].text +
                            '');
                        $.each(datasub.data, function(index, element) {
                            const description = element.description.split(' ');
                            var descriptionelementfirst = [];
                            for (let idescriptionfirst = 0; idescriptionfirst <
                                14; idescriptionfirst++) {
                                descriptionelementfirst += description[idescriptionfirst] + ' ';

                            }
                            var descriptionelementlast = [];
                            for (let idescriptionlast = 16; idescriptionlast <= description
                                .length; idescriptionlast++) {
                                descriptionelementlast += description[idescriptionlast] + ' ';

                            }
                            if (element.records.length == 0) {
                                var record = 'img/default.png';
                            } else {
                                var record = element.records[0].url;
                            }
                            console.log(element.records.length);
                            disenos.append(
                                '<div class="col justify-content-center card-disenos card-disenos-width-list d-flex flex-row align-items-start border-0 my-2" id="card-disenos">' +
                                '<a class="my-auto" href="/get_detail_design/' + element.id +
                                '"><img class="img-width-list-destock" src="../' + record +
                                '" alt="Card image cap"></a>' +
                                '<div class="description "><p class="text-center py-3">' +
                                descriptionelementfirst +
                                '</p> </div><a class="description-vermas  " href="/get_detail_design/' +
                                element.id +
                                '"><svg fill="#fff" height="45px" width="45px" class="mx-2 "  viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><g fill=""> <path d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" /> <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" /></g></svg></a></div>'
                            );
                            $(".btnVerMas" + element.id).click(function() {
                                console.log($("#oculto" + element.id).toggleClass('d-none'));

                            });
                        });
                        pagination.empty();
                        $.each(datasub.links, function(index, element) {
                            if (index == 0) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    before_page + ',' + subcategory.value +
                                    ') ">Anterior</button></li>'
                                );
                            } else if (index == datasub.links.length - 1) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    after_page + ',' + subcategory.value +
                                    ') ">Siguiente</button></li>'
                                );
                            } else {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    element.label + ',' + subcategory.value + ') ">' + element
                                    .label +
                                    '</button></li>'
                                );
                            }

                            /*  console.log(element); */

                        });


                    }

                });

            }






        }

        function prueba(category) {
            /* vars generales */
            /*  var category = document.querySelector("#category_id"); */
            /*  var category = $('#category_id'); */
            console.log(category.value);
            var disenos = $('.card-group-disenos');
            var pagination = $('#pagination');
            var titleDesignsByCategory = $('#titleDesignsByCategory');
            var onsection = document.querySelector("#icon-disenos-onsection");
            var offsection = document.querySelector("#icon-disenos-offsection");
            /* bool-section */
            var boolonsection = onsection.classList.contains('icon-disenos-onsection');
            var booloffsection = offsection.classList.contains('icon-disenos-offsection');
            /* if true or false */
            if (boolonsection == true && booloffsection == true) {
                console.log(boolonsection, booloffsection);
                $.ajax({
                    url: "{{ route('get.designsbycategory') }}",
                    method: 'GET',
                    data: {
                        category: category.value,

                    },
                    success: function(data) {
                        console.log(data);
                        var current_page = parseInt(data.current_page);
                        var before_page = parseInt(data.current_page) - 1;
                        var after_page = parseInt(data.current_page) + 1;
                        if (before_page == 0) {
                            before_page = data.last_page;
                        } else {
                            before_page = parseInt(data.current_page) - 1;
                        }
                        if (after_page > data.last_page) {
                            after_page = 1;
                        } else {
                            after_page = parseInt(data.current_page) + 1;
                        }

                        disenos.empty();
                        titleDesignsByCategory.empty();
                        titleDesignsByCategory.append('' + category.options[category.selectedIndex].text + '');
                        $.each(data.data, function(index, element) {
                            const description = element.description.split(' ');
                            var descriptionelementfirst = [];
                            for (let idescriptionfirst = 0; idescriptionfirst <
                                14; idescriptionfirst++) {
                                descriptionelementfirst += description[idescriptionfirst] + ' ';

                            }
                            var descriptionelementlast = [];
                            for (let idescriptionlast = 16; idescriptionlast <= description
                                .length; idescriptionlast++) {
                                descriptionelementlast += description[idescriptionlast] + ' ';

                            }
                            if (element.records.length == 0) {
                                var record = 'img/default.png';
                            } else {
                                var record = element.records[0].url;
                            }
                            console.log(element.records.length);
                            disenos.append(
                                '<div class="col justify-content-center card-disenos card-disenos-width-quack" id="card-disenos">' +
                                '<a class="my-auto" href="/get_detail_design/' + element.id +
                                '"><img class="img-width-quack-destock animate" src="../' + record +
                                '" alt="Card image cap"></a>' +
                                '<div class="description d-none"><p class="text-center py-3">' +
                                descriptionelementfirst +
                                '</p> </div><a class="description-vermas d-none " href="/get_detail_design/' +
                                element.id +
                                '"><svg fill="#fff" height="45px" width="45px" class="mx-2 "  viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><g fill=""> <path d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" /> <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" /></g></svg></a></div>'
                            );
                            $(".btnVerMas" + element.id).click(function() {
                                console.log($("#oculto" + element.id).toggleClass('d-none'));

                            });
                        });
                        pagination.empty();
                        $.each(data.links, function(index, element) {
                            if (index == 0) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    before_page + ',' + category.value +
                                    ') ">Anterior</button></li>'
                                );
                            } else if (index == data.links.length - 1) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    after_page + ',' + category.value +
                                    ') ">Siguiente</button></li>'
                                );
                            } else {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    element.label + ',' + category.value + ') ">' + element.label +
                                    '</button></li>'
                                );
                            }

                            /*  console.log(element); */

                        });


                    }

                });
            } else {
                console.log(boolonsection, booloffsection);
                $.ajax({
                    url: "{{ route('get.designsbycategory') }}",
                    method: 'GET',
                    data: {
                        category: category.value,

                    },
                    success: function(data) {
                        console.log(data);
                        var current_page = parseInt(data.current_page);
                        var before_page = parseInt(data.current_page) - 1;
                        var after_page = parseInt(data.current_page) + 1;
                        if (before_page == 0) {
                            before_page = data.last_page;
                        } else {
                            before_page = parseInt(data.current_page) - 1;
                        }
                        if (after_page > data.last_page) {
                            after_page = 1;
                        } else {
                            after_page = parseInt(data.current_page) + 1;
                        }

                        disenos.empty();
                        titleDesignsByCategory.empty();
                        titleDesignsByCategory.append('' + category.options[category.selectedIndex].text + '');
                        $.each(data.data, function(index, element) {
                            const description = element.description.split(' ');
                            var descriptionelementfirst = [];
                            for (let idescriptionfirst = 0; idescriptionfirst <
                                14; idescriptionfirst++) {
                                descriptionelementfirst += description[idescriptionfirst] + ' ';

                            }
                            var descriptionelementlast = [];
                            for (let idescriptionlast = 16; idescriptionlast <= description
                                .length; idescriptionlast++) {
                                descriptionelementlast += description[idescriptionlast] + ' ';

                            }
                            if (element.records.length == 0) {
                                var record = 'img/default.png';
                            } else {
                                var record = element.records[0].url;
                            }
                            console.log(element.records.length);
                            disenos.append(
                                '<div class="col justify-content-center card-disenos card-disenos-width-list d-flex flex-row align-items-start border-0 my-2" id="card-disenos">' +
                                '<a class="my-auto" href="/get_detail_design/' + element.id +
                                '"><img class="img-width-list-destock" src="../' + record +
                                '" alt="Card image cap"></a>' +
                                '<div class="description "><p class="text-center py-3">' +
                                descriptionelementfirst +
                                '</p> </div><a class="description-vermas  " href="/get_detail_design/' +
                                element.id +
                                '"><svg fill="#fff" height="45px" width="45px" class="mx-2 "  viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><g fill=""> <path d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" /> <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" /></g></svg></a></div>'
                            );
                            $(".btnVerMas" + element.id).click(function() {
                                console.log($("#oculto" + element.id).toggleClass('d-none'));

                            });
                        });
                        pagination.empty();
                        $.each(data.links, function(index, element) {
                            if (index == 0) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    before_page + ',' + category.value +
                                    ') ">Anterior</button></li>'
                                );
                            } else if (index == data.links.length - 1) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    after_page + ',' + category.value +
                                    ') ">Siguiente</button></li>'
                                );
                            } else {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    element.label + ',' + category.value + ') ">' + element.label +
                                    '</button></li>'
                                );
                            }

                            /*  console.log(element); */

                        });


                    }

                });

            }






        }

        function paginate(page, category) {

            /* vars generales */
            var disenos = $('.card-group-disenos');
            var pagination = $('#pagination');
            var onsection = document.querySelector("#icon-disenos-onsection");
            var offsection = document.querySelector("#icon-disenos-offsection");
            /* bool-section */
            var boolonsection = onsection.classList.contains('icon-disenos-onsection');
            var booloffsection = offsection.classList.contains('icon-disenos-offsection');
            /* if true or false */
            if (boolonsection == true && booloffsection == true) {
                $.ajax({
                    url: "{{ route('get.designsbycategory') }}",
                    method: 'GET',
                    data: {
                        category: category,
                        page: page,

                    },
                    success: function(data) {
                        /* console.log(data); */
                        var current_page = parseInt(data.current_page);
                        var before_page = parseInt(data.current_page) - 1;
                        var after_page = parseInt(data.current_page) + 1;
                        if (before_page == 0) {
                            before_page = data.last_page;
                        } else {
                            before_page = parseInt(data.current_page) - 1;
                        }
                        if (after_page > data.last_page) {
                            after_page = 1;
                        } else {
                            after_page = parseInt(data.current_page) + 1;
                        }

                        disenos.empty();
                        /* console.log(data.data); */
                        $.each(data.data, function(index, element) {
                            if (element.records.length == 0) {
                                var record = 'img/default.png';
                            } else {
                                var record = element.records[0].url;
                            }
                            console.log(element.records.length);
                            disenos.append(
                                '<div class="col justify-content-center card-disenos card-disenos-width-quack" id="card-disenos">' +
                                '<img class="img-width-quack-destock animate" src="../' + record +
                                '" alt="Card image cap">' +
                                '<div class="description  d-none"><p class="text-center py-3">' +
                                element.description + '</p>' +
                                ' </div><a class="description-vermas d-none " href=""><svg fill="#fff" height="45px" width="45px" class="mx-2 "  viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><g fill=""> <path d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" /> <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" /></g></svg></a></div>'
                            );
                        });
                        pagination.empty();
                        $.each(data.links, function(index, element) {
                            if (index == 0) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    before_page + ',' + category + ') ">Anterior</button></li>'
                                );
                            } else if (index == data.links.length - 1) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    after_page + ',' + category + ') ">Siguiente</button></li>'
                                );
                            } else {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    element.label + ',' + category + ') ">' + element.label +
                                    '</button></li>'
                                );
                            }
                            /*  console.log(element); */

                        });


                    }

                });
            } else {
                $.ajax({
                    url: "{{ route('get.designsbycategory') }}",
                    method: 'GET',
                    data: {
                        category: category,
                        page: page,

                    },
                    success: function(data) {
                        console.log(data);
                        var current_page = parseInt(data.current_page);
                        var before_page = parseInt(data.current_page) - 1;
                        var after_page = parseInt(data.current_page) + 1;
                        if (before_page == 0) {
                            before_page = data.last_page;
                        } else {
                            before_page = parseInt(data.current_page) - 1;
                        }
                        if (after_page > data.last_page) {
                            after_page = 1;
                        } else {
                            after_page = parseInt(data.current_page) + 1;
                        }

                        disenos.empty();
                        $.each(data.data, function(index, element) {
                            if (element.records.length == 0) {
                                var record = 'img/default.png';
                            } else {
                                var record = element.records[0].url;
                            }
                            disenos.append(
                                '<div class="col text-center mx-0 card-disenos d-flex flex-row align-items-start border-0 my-2" id="card-disenos">' +
                                '<img class="img-width-list-destock" src="../' + record +
                                '" alt="Card image cap">' +
                                '<div class="description "><p class="text-center py-3">' +
                                element.description + '</p>' +
                                ' </div><a class="description-vermas  " href=""><svg fill="#fff" height="45px" width="45px" class="mx-2 "  viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><g fill=""> <path d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" /> <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" /></g></svg></a></div>'
                            );
                        });
                        pagination.empty();
                        $.each(data.links, function(index, element) {
                            if (index == 0) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    before_page + ',' + category + ') ">Anterior</button></li>'
                                );
                            } else if (index == data.links.length - 1) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    after_page + ',' + category + ') ">Siguiente</button></li>'
                                );
                            } else {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginate(' +
                                    element.label + ',' + category + ') ">' + element.label +
                                    '</button></li>'
                                );
                            }
                            /*  console.log(element); */

                        });


                    }

                });

            }

            /* console.log(page, category); */
        }
    </script>
    <script>
        const carddisenos = $('.card-disenos');
        const disenosall = $('#disenosall');

        if (carddisenos.length > 10 && carddisenos.length < 15) {
            for (let index = 10; index < carddisenos.length; index++) {
                carddisenos.toggleClass('col-3')[index];
                carddisenos.toggleClass('col')[index];
                disenosall.toggleClass('disenosallvh');
                disenosall.toggleClass('disenosallporcent');

            }
        } else {

        }
        var onsection = $('.icon-disenos-onsection');
        var offsection = $('.icon-disenos-offsection');

        onsection.click(function() {
            onsection.toggleClass('icon-disenos-onsection');
            offsection.toggleClass('icon-disenos-offsection');
            onsection.toggleClass('icon-disenos-offsection');
            offsection.toggleClass('icon-disenos-onsection');
            changeDisenos();
            classActualonsection();
            var asdasdads = $('.page-link');
            for (let index = 0; index < asdasdads.length; index++) {
                const element = asdasdads[index];
                
                console.log(element);
            }
            /* var asdasdasdasdasdas = $('.page-link').attr('href', asdasdads+'&section=grid'); */


        });
        offsection.click(function() {
            onsection.toggleClass('icon-disenos-onsection');
            offsection.toggleClass('icon-disenos-offsection');
            onsection.toggleClass('icon-disenos-offsection');
            offsection.toggleClass('icon-disenos-onsection');
            changeDisenos();
            classActualoffsection();
           /*  var asdasdads = $('.page-link').attr('href');
            console.log(asdasdads); */
        });

        function classActualonsection() {
            var onsectionclassActualonsection = document.querySelector("#icon-disenos-onsection");
            console.log(onsectionclassActualonsection.classList);
        }

        function classActualoffsection() {
            var offsectionclassActualoffsection = document.querySelector("#icon-disenos-offsection");
            /*  console.log(offsectionclassActualoffsection.classList); */

        }

        function changeDisenos() {


            const carddisenos = $('.card-disenos');
            const disenosall = $('#disenosall');
            const cardgroupdisenos = $('.card-group-disenos');
            const description = $('.description');
            const descriptionvermas = $('.description-vermas');
            const cardgroup = $('.card-group-disenos');
            const imgwidthquackdestock = $('.img-width-quack-destock');
            const imgwidthlistdestock = $('.img-width-list-destock');
            cardgroupdisenos.toggleClass('mx-0');
            cardgroupdisenos.toggleClass('pt-5');
            cardgroupdisenos.toggleClass('flex-column');
            cardgroup.toggleClass("bg-white");

            carddisenos.toggleClass('card-disenos-width-quack');
            carddisenos.toggleClass('card-disenos-width-list');
            carddisenos.toggleClass('d-flex');
            carddisenos.toggleClass('flex-row');
            carddisenos.toggleClass('align-items-start');
            carddisenos.toggleClass('border-0');
            carddisenos.toggleClass('my-2');
            description.toggleClass("d-none");
            descriptionvermas.toggleClass("d-none");
            imgwidthquackdestock.toggleClass("img-width-quack-destock");
            imgwidthquackdestock.toggleClass("img-width-list-destock");
            imgwidthlistdestock.toggleClass("img-width-quack-destock");
            imgwidthlistdestock.toggleClass("img-width-list-destock");
            if (carddisenos.length >= 8) {
                disenosall.toggleClass('disenosallvh');
                disenosall.toggleClass('disenosallporcent');
            } else {

            }

            /*  for (let index = 0; index < carddisenos.length; index++) {
                            carddisenos.toggleClass('d-flex')[index];
                            carddisenos.toggleClass('flex-row')[index];
                            carddisenos.toggleClass('align-items-center')[index];
                            carddisenos.toggleClass('border-0')[index];
                            carddisenos.toggleClass('my-2')[index];
                            description.toggleClass("d-none")[index];
                            descriptionvermas.toggleClass("d-none")[index];
                            imgwidthquackdestock.toggleClass("img-width-quack-destock")[index];
                            imgwidthquackdestock.toggleClass("img-width-list-destock")[index];
                            
                        }
             */
        }
    </script>
    {{-- <script>
        document.querySelector(".icon-disenos-onsection").addEventListener("click", changeFilter);
        document.querySelector(".icon-disenos-offsection").addEventListener("click", changeFilter);
        var onsection = document.querySelector(".icon-disenos-onsection");
        var offsection = document.querySelector(".icon-disenos-offsection");
        var carddisenos = document.querySelectorAll("#card-disenos");
        var cardgroupdisenos = document.querySelector(".card-group-disenos");
        var description = document.querySelectorAll(".description");
        var descriptionvermas = document.querySelectorAll(".description-vermas");
        var cardgroup = document.querySelector(".card-group-disenos");
        var imgwidthquackdestock = document.querySelectorAll(".img-width-quack-destock");

        function changeFilter() {
            console.log(carddisenos.length);
            
            onsection.classList.toggle("icon-disenos-onsection");
            offsection.classList.toggle("icon-disenos-offsection");
            onsection.classList.toggle("icon-disenos-offsection");
            offsection.classList.toggle("icon-disenos-onsection");
            cardgroupdisenos.classList.toggle("mx-0");
            cardgroupdisenos.classList.toggle("pt-5");
            cardgroupdisenos.classList.toggle("flex-column");

            cardgroup.classList.toggle("bg-white");
            for (let i = 0; i < carddisenos.length; i++) {
                carddisenos[i].classList.toggle("d-flex");
                carddisenos[i].classList.toggle("flex-row");
                carddisenos[i].classList.toggle("align-items-center");
                carddisenos[i].classList.toggle("border-0");
                carddisenos[i].classList.toggle("my-2");
                description[i].classList.toggle("d-none");
                descriptionvermas[i].classList.toggle("d-none");
                imgwidthquackdestock[i].classList.toggle("img-width-quack-destock");
                imgwidthquackdestock[i].classList.toggle("img-width-list-destock");
            }

        }
    </script> --}}
@endsection
