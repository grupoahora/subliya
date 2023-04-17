@extends('layouts.subliyamaster')


@section('css')
@endsection

@section('header')
    <!-- header nav y primera sección -->
    <header>
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
    </header>
@endsection
@section('contentbody')
    <div class="container-fluid " id="disenos-section">
        <div class="row flex-lg-row flex-column-reverse ">
            <div class="col-5 col-lg-2  bg-disenos my-2 my-lg-0 ">
                <h4 class=" text-white "> Diseños</h4>
            </div>
            <div class="col-12 col-lg-4 ms-auto">
                <div class="row ">
                    <div class="col-7 col-lg-6 ms-auto">
                        <label class="fw-bold" for="filter">Filtrar:</label>
                        <select name="select-disenos flex-row" class="select-disenos" style="width: 100%" name=""
                            id="">
                            <optgroup label="Categorías">
                                <option value="" disabled selected>-categoría-</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach

                            </optgroup>

                        </select>
                    </div>

                    <div class="col-5 col-lg-3 me-lg-auto">
                        <div class="icon-disenos-onsection"><svg viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
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
                        <div class="icon-disenos-offsection"><svg viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg">
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
    <div class="container">
        <div
            class="row justify-content-center align-items-center  card-group-disenos-width-5  card-group-disenos  mx-0  mx-lg-auto ">
            @foreach ($designs as $design)
                <div class="col text-center mx-0 card-disenos" id="card-disenos">
                    @foreach ($design->records as $record)
                        @if ($loop->first)
                            <img class="img-width-quack-destock" src="{{ $record->url }}" alt="Card image cap">
                        @else
                        @endif
                    @endforeach
                    <div class="description h-auto d-none">
                        <p class="text-start py-3">
                            @if (!isset(explode(' ', $design->description, 17)[16]))
                                {!! $design->description !!}
                            @endif
                            @if (isset(explode(' ', $design->description, 17)[16]))
                                @for ($i = 0; $i < 16; $i++)
                                    {!! explode(' ', $design->description, 17)[$i] !!}
                                @endfor
                                <span id="oculto{{ $design->id }}" class="d-none">
                                    {!! explode(' ', $design->description, 17)[16] !!}
                                </span>
                                <a href="#" class="btnVerMas{{ $design->id }}">Ver Más</a>
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
                    <a class="description-vermas d-none " href="{{ route('diseno.detail') }}">
                        <svg fill="#fff" height="45px" width="45px" class="px-1 " style="margin-block: 12px"
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
            <ul class="pagination mt-4 justify-content-center align-items-center">
                <li class="page-item"><a class="page-link" href="?page={{ $designs->currentPage() - 1 }}">Anterior</a>
                </li>
                <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
                <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
                <li class="page-item"><a class="page-link" href="?page=3">3</a></li>
                <li class="page-item"><a class="page-link" href="?page={{ $designs->currentPage() + 1 }}">Siguiente</a>
                </li>
            </ul>
        </nav>
    </div>
    {{-- <div class=" card-group-disenos-width-5  card-group-disenos  d-flex flex-row flex-lg-row  align-items-sm-center flex-wrap mt-5 pt-5 justify-content-lg-around mx-0  mx-lg-auto">
            @foreach ($designs as $design)
                <div class="card card-disenos" id="card-disenos">
                    @foreach ($design->records as $record)
                        @if ($loop->first)
                            <img class="img-width-quack-destock" src="{{ $record->url }}" alt="Card image cap">
                        @else

                        @endif
                    @endforeach
                    <div class="description d-none">
                        <p>
                            {{$design->id}}
                        </p>
                    </div>
                    <a class="description-vermas d-none text-center" href="{{ route('diseno.detail') }}">
                        <svg fill="#fff" height="auto" width="45px" class="px-1" viewBox="0 0 12 12"
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

           
            <nav aria-label="Page navigation example">
                <ul class="pagination mt-4">
                    <li class="page-item"><a class="page-link" href="?page=Actual-1">Anterior</a></li>
                    <li class="page-item"><a class="page-link" href="?page=1">1</a></li>
                    <li class="page-item"><a class="page-link" href="?page=2">2</a></li>
                    <li class="page-item"><a class="page-link" href="?page=3">3</a></li>
                    <li class="page-item"><a class="page-link" href="?page=Actual+1">Siguiente</a></li>
                </ul>
            </nav>

        </div> --}}





    </div>
@endsection
@section('js')
    
    <script>
        document.querySelector(".select-disenos").addEventListener("change", prueba);
        
        function prueba() {

            var category = document.querySelector(".select-disenos");
            var disenos = $('.card-group-disenos');
            console.log(category.value);

            $.ajax({
                url: "{{ route('get.designsbycategory') }}",
                method: 'GET',
                data: {
                    category: category.value,

                },
                success: function(data) {
                    disenos.empty();
                    $.each(data, function(index, element) {
                        disenos.append(
                            '<div class="col text-center mx-0 card-disenos" id="card-disenos">' +
                            '<img class="img-width-quack-destock" src="' + element.records[0].url +
                            '" alt="Card image cap">' +
                            '<div class="description h-auto d-none"><p class="text-start py-3">' +
                            element.description + '</p>' +
                            ' </div><a class="description-vermas d-none " href=""><svg fill="#fff" height="45px" width="45px" class="px-1 " style="margin-block: 12px" viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><g fill=""> <path d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" /> <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" /></g></svg></a></div>'
                        );
                    });

                    
                }

            });
            
          
        }
    </script>
    <script>
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
    </script>
@endsection
