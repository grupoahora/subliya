@extends('layouts.subliyamaster')


@section('css')
@endsection

@section('header')
@endsection
@section('contentbody')
    <div class="container-fluid  " id="disenos-section">
        <div id="nav-bar-container " class="navbar-container position-sm-fixed slide-in-right ">

            <div class="links d-flex flex-column justify-content-evenly align-items-center">
                <div class="d-flex flex-column justify-content-end align-items-center w-75 h-25">
                    <div class="bg-disenos text-center mt-2 my-lg-0 w-100 ">
                        @if (isset($categoryselect))
                            <h4 class=" text-white  my-auto" id="titleDesignsByCategory"> {{ $categoryselect->name }}</h4>
                        @else
                            <h4 class=" text-white  my-auto" id="titleDesignsByCategory"> Diseños</h4>
                        @endif
                    </div>

                </div>
                <div class="d-flex flex-column justify-content-start align-items-center w-75 h-75">
                    <div class="me-auto pt-4">
                        <form class="" action="{{ route('get.by.name') }}" role="search"
                            method="get" id="search-header">
                            @csrf
                            <div class="input-group  ">
                                <button class="btn btn-outline-secondary p-0 " type="submit" id="button-addon1" style="opacity: 0.7;border-color: #3c2779;border-radius: 15px 0px 0px 15px!important;border: 2px solid #000!important;"><img
                                    src="{{asset('svg/magnifying-glass.svg')}}" alt="" width="30px" height="auto"></button>
                                <input type="text" class="form-control form-disenos" placeholder="Buscar Diseño" name="search"
                                    aria-label="Example text with button addon" aria-describedby="button-addon1">
                            </div>
                            {{-- <button class="btn btn-outline-success  display-destock-search" type="submit"><img
                                    src="svg/magnifying-glass.svg" alt=""></button>
                            <input class="form-group me-auto display-destock-search" type="search" name="search"
                                placeholder="Search" aria-label="Search"> --}}
                        </form>
                      
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
                        <br>
                        <label class="fw-bold py-2" for="filter">Filtrar Sub-Categoría:</label>
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

                    <div class="d-flex justify-content-end align-items-end w-100 py-4">
                        <div class=" icon-disenos">
                            <button
                                class="@if ($view == 0) icon-disenos-onsection @else icon-disenos-offsection @endif  mx-3 "
                                id="icon-disenos-onsection" onclick="changeSection(0)"
                                @if ($view == 0) disabled @else @endif>
                                <svg viewBox="0 0 35 35" xmlns="http://www.w3.org/2000/svg">
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
                            </button>
                            <button
                                class="@if ($view == 0) icon-disenos-offsection @else icon-disenos-onsection @endif "
                                id="icon-disenos-offsection" onclick="changeSection(1)"
                                @if ($view == 1) disabled @else @endif>
                                <svg viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg">
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
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <div class="container-fluid width-designs me-sm-0 mt-5 pt-5 mx-auto">

            <div class="row d-flex flex-row justify-content-center align-items-center card-group-disenos asdasdas">
                @foreach ($designsweb as $design)
                    <div class="col-12 @if ($view == 0) col-md-2 mx-3 @else @endif  p-0 desings mb-3 "
                        id="">
                        <div class="card border-0 d-flex flex-row justify-content-center ">
                            <a href="{{ route('get.detail.design', $design->id) }}">

                                @foreach ($design->records as $record)
                                    @if ($loop->first)
                                        {{-- This is the first iteration --}}
                                        <img src="{{ $record->url }}"
                                            class="@if ($view == 0) card-img-top @else card-img-top-list @endif  animate"
                                            alt="Imagen del producto">
                                    @else
                                    @endif
                                @endforeach
                                @if (count($design->records) == 0)
                                    <img src="../img/default.png"
                                        class="@if ($view == 0) card-img-top @else card-img-top-list @endif  animate"
                                        alt="Imagen del producto">
                                @else
                                @endif
                            </a>
                            <div class="card-body @if ($view == 0) d-none @else @endif  desingsCardBody ">
                                {{-- {{$design}} --}}
                                <h5 class="card-title">{{ $design->name }}</h5>
                                <p class="card-text ">
                                    @if (!isset(explode(' ', $design->description, 14)[13]))
                                        {!! $design->description !!}
                                    @endif
                                    @if (isset(explode(' ', $design->description, 14)[13]))
                                        @for ($i = 0; $i < 13; $i++)
                                            {!! explode(' ', $design->description, 14)[$i] !!}
                                        @endfor
                                        <span id="oculto{{ $design->id }}" class="d-none">
                                            {!! explode(' ', $design->description, 14)[13] !!}
                                        </span>
                                    @endif
                                </p>
                            </div>
                            <a class="description-vermas @if ($view == 0) d-none @else @endif "
                                href="{{ route('get.detail.design', $design->id) }}">
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
                    </div>
                @endforeach


            </div>

            <nav aria-label="Paginación ">
                <ul class="pagination d-flex flex-wrap "id="pagination">
                    <li class="page-item">
                        <a class="page-link"
                            href="http://subliya.com/get_detail_all?page={{ $designsweb->links()->paginator->currentPage() - 1 }}&view={{ $view }}">Anterior</a>
                    </li>
                    {{-- @php
                        dd($designsweb->currentPage());
                    @endphp --}}
                    @for ($i = $designsweb->currentPage(); $i <= $designsweb->lastPage(); $i++)
                    @if ($i <= $designsweb->currentPage() + 10)
                         <li class="page-item"><a class="page-link"
                                href="?page={{ $i }}&view={{ $view }}">{{ $i }}</a>
                        </li>
                    @else
                        
                    @endif
                        
                    @endfor
                   {{--  @foreach ($designsweb->links()->elements[0] as $key => $item)
                        <li class="page-item"><a class="page-link"
                                href="{{ $item }}&view={{ $view }}">{{ $key }}</a>
                        </li>
                    @endforeach --}}

                    <li class="page-item">
                        @if ($designsweb->links()->paginator->currentPage() + 1 >= $designsweb->links()->paginator->lastPage())
                            <a class="page-link"
                                href="http://subliya.com/get_detail_all?page={{ $designsweb->links()->paginator->lastPage() }}&view={{ $view }}">Siguiente</a>
                        @else
                            <a class="page-link"
                                href="http://subliya.com/get_detail_all?page={{ $designsweb->links()->paginator->currentPage() + 1 }}&view={{ $view }}">Siguiente</a>
                        @endif
                    </li>
                </ul>
            </nav>
        </div>



    </div>
@endsection
@section('js')
    <script>
        function changeSection(listOrGrid) {

            let onsection = $('.icon-disenos-onsection');
            let offsection = $('.icon-disenos-offsection');
            let onsectionid = $('#icon-disenos-onsection');
            let offsectionid = $('#icon-disenos-offsection');
            let disabledtrue = listOrGrid == 0 ? onsectionid.attr('disabled', 'disabled') : offsectionid.attr('disabled',
                'disabled');
            let disabledfalse = listOrGrid == 0 ? offsectionid.attr('disabled', false) : onsectionid.attr('disabled',
                false);
            let desings = document.querySelectorAll('.desings');
            let cardimgtop = document.querySelectorAll('.card-img-top');
            let cardimgtoplist = document.querySelectorAll('.card-img-top-list');
            let descriptionVermas = document.querySelectorAll('.description-vermas');
            let desingsCardBody = document.querySelectorAll('.desingsCardBody');
            let pagination = document.getElementById('pagination').children;
            for (let index = 0; index < pagination.length; index++) {
                let buttons = pagination[index].querySelectorAll('button').length;
                console.log(buttons);
                if (buttons > 0) {

                } else {

                    const element = pagination[index].children[0];

                    let str = element.search;
                    let arr = str.split("&").map(elem => elem.split("="));

                    let obj = {};
                    arr.forEach(([key, value]) => obj[key.replace(/\?/g, '')] = value);
                    obj.view = listOrGrid == 0 ? 0 : 1;


                    element.href = element.baseURI + '?page=' + obj.page + '&view=' + obj.view;

                }
            }

            onsection.toggleClass('icon-disenos-onsection');
            onsection.toggleClass('icon-disenos-offsection');
            offsection.toggleClass('icon-disenos-onsection');
            offsection.toggleClass('icon-disenos-offsection');
            /*  for (let index = 0; index < pagination.length; index++) {
                    pagination[i].setAttribute('href', hijos[i].getAttribute('href') + '');
                    
                } */
            for (let index = 0; index < desings.length; index++) {


                /*  cardimgtop[index].classList.toggle('card-img-top'); */

                if (cardimgtoplist.length == 0) {

                    cardimgtop[index].classList.toggle('card-img-top');
                    cardimgtop[index].classList.toggle('card-img-top-list');
                } else {
                    cardimgtoplist[index].classList.toggle('card-img-top');
                    cardimgtoplist[index].classList.toggle('card-img-top-list');
                }
                descriptionVermas[index].classList.toggle('d-none');
                desings[index].classList.toggle('col-md-2');
                desings[index].classList.toggle('mx-3');
                desingsCardBody[index].classList.toggle('d-none');
            }
        }

        $(document).on('change', '#category_id', (event), function() {
            changeCategory(event.target);
        });
        $(document).on('change', '#subcategory_id', (event), function() {
            changebysubcategory(event.target);
        });

        function changeCategory(category) {
            let subcategory = $('#subcategory_id');

            $.ajax({
                url: "{{ route('get.subcategoriesbycategoryunique') }}",
                method: 'GET',
                data: {
                    category: category.value,
                },
                success: function(data) {


                    subcategory.empty();

                    subcategory.append(
                        '<option value="" disabled selected>Sub-Categoría</option>'
                    );



                    $.each(data, function(index, element) {
                        subcategory.append(
                            '<option value="' + element.id + '">' + element.name +
                            '</option>'
                        );


                    })


                }
            });
            let disenos = $('.card-group-disenos');
            let pagination = $('#pagination');
            let titleDesignsByCategory = document.querySelector('#titleDesignsByCategory');
            let onsection = document.querySelector("#icon-disenos-onsection");
            let offsection = document.querySelector("#icon-disenos-offsection");
            let boolonsection = onsection.classList.contains('icon-disenos-onsection');
            let booloffsection = offsection.classList.contains('icon-disenos-offsection');
            /* if true or false */

            $.ajax({
                url: "{{ route('get.designsbycategory') }}",
                method: 'GET',
                data: {
                    category: category.value,

                },
                success: function(data) {
                    if (boolonsection == true && booloffsection == true) {

                        let current_page = parseInt(data.current_page);
                        let before_page = parseInt(data.current_page) - 1;
                        let after_page = parseInt(data.current_page) + 1;
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
                        titleDesignsByCategory.innerHTML = "";
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


                            disenos.append(
                                '<div class="col-12 col-md-2 mx-3 p-0 desings mb-3" id="">' +
                                '<div class="card border-0 d-flex flex-row justify-content-center ">' +
                                '<a href="/get_detail_design/'+element.id+'">'+
                                '<img src="../' + record +
                                '" class="card-img-top animate" alt="Imagen del producto">' +
                                '</a><div class="card-body d-none desingsCardBody ">' +
                                '<h5 class="card-title">' + element.name + '</h5>' +
                                '<p class="card-text ">' + descriptionelementfirst +
                                '</p> </div><a class="description-vermas d-none " href="/get_detail_design/' +
                                element.id +
                                '"><svg fill="#fff" height="45px" width="45px" class="mx-2 "  viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><g fill=""> <path d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" /> <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" /></g></svg></a></div></div>'


                            );

                        });
                        pagination.empty();
                        $.each(data.links, function(index, element) {
                            if (index == 0) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateCat(' +
                                    before_page + ',' + category.value +
                                    ') ">Anterior</button></li>'
                                );
                            } else if (index == data.links.length - 1) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateCat(' +
                                    after_page + ',' + category.value +
                                    ') ">Siguiente</button></li>'
                                );
                            } else {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateCat(' +
                                    element.label + ',' + category.value + ') ">' + element.label +
                                    '</button></li>'
                                );
                            }



                        });


                    } else {
                        let current_page = parseInt(data.current_page);
                        let before_page = parseInt(data.current_page) - 1;
                        let after_page = parseInt(data.current_page) + 1;
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
                        titleDesignsByCategory.innerHTML = "";
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


                            disenos.append(
                                '<div class="col-12 p-0 desings mb-3" id="">' +
                                '<div class="card border-0 d-flex flex-row justify-content-center ">' +
                                '<a href="/get_detail_design/'+element.id+'">'+
                                '<img src="../' + record +
                                '" class="card-img-top-list animate" alt="Imagen del producto">' +
                                '</a><div class="card-body  desingsCardBody ">' +
                                '<h5 class="card-title">' + element.name + '</h5>' +
                                '<p class="card-text ">' + descriptionelementfirst +
                                '</p> </div><a class="description-vermas  " href="/get_detail_design/' +
                                element.id +
                                '"><svg fill="#fff" height="45px" width="45px" class="mx-2 "  viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><g fill=""> <path d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" /> <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" /></g></svg></a></div></div>'


                            )

                        });
                        pagination.empty();
                        $.each(data.links, function(index, element) {
                            if (index == 0) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateCat(' +
                                    before_page + ',' + category.value +
                                    ') ">Anterior</button></li>'
                                );
                            } else if (index == data.links.length - 1) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateCat(' +
                                    after_page + ',' + category.value +
                                    ') ">Siguiente</button></li>'
                                );
                            } else {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateCat(' +
                                    element.label + ',' + category.value + ') ">' + element.label +
                                    '</button></li>'
                                );
                            }



                        });
                    }

                }
            });
        }

        function paginateCat(page, category) {
            console.log(category);
            let disenos = $('.card-group-disenos');
            let pagination = $('#pagination');
            let onsection = document.querySelector("#icon-disenos-onsection");
            let offsection = document.querySelector("#icon-disenos-offsection");
            let boolonsection = onsection.classList.contains('icon-disenos-onsection');
            let booloffsection = offsection.classList.contains('icon-disenos-offsection');
            $.ajax({
                url: "{{ route('get.designsbycategory') }}",
                method: 'GET',
                data: {
                    category: category,
                    page: page,

                },
                success: function(data) {
                    if (boolonsection == true && booloffsection == true) {

                        let current_page = parseInt(data.current_page);
                        let before_page = parseInt(data.current_page) - 1;
                        let after_page = parseInt(data.current_page) + 1;
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

                            if (element.records.length == 0) {
                                var record = 'img/default.png';
                            } else {
                                var record = element.records[0].url;
                            }

                            disenos.append(
                                '<div class="col-12 col-md-2 mx-3 p-0 desings mb-3" id="">' +
                                '<div class="card border-0 d-flex flex-row justify-content-center ">' +
                                '<a href="/get_detail_design/'+element.id+'">'+
                                '<img src="../' + record +
                                '" class="card-img-top animate" alt="Imagen del producto">' +
                                '</a><div class="card-body d-none desingsCardBody ">' +
                                '<h5 class="card-title">' + element.name + '</h5>' +
                                '<p class="card-text ">' + descriptionelementfirst +
                                '</p> </div><a class="description-vermas d-none " href="/get_detail_design/' +
                                element.id +
                                '"><svg fill="#fff" height="45px" width="45px" class="mx-2 "  viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><g fill=""> <path d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" /> <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" /></g></svg></a></div></div>'

                            );
                        });
                        pagination.empty();
                        $.each(data.links, function(index, element) {
                            if (index == 0) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateCat(' +
                                    before_page + ',' + category + ') ">Anterior</button></li>'
                                );
                            } else if (index == data.links.length - 1) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateCat(' +
                                    after_page + ',' + category + ') ">Siguiente</button></li>'
                                );
                            } else {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateCat(' +
                                    element.label + ',' + category + ') ">' + element.label +
                                    '</button></li>'
                                );
                            }


                        });


                    } else {
                        let current_page = parseInt(data.current_page);
                        let before_page = parseInt(data.current_page) - 1;
                        let after_page = parseInt(data.current_page) + 1;
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
                                '<div class="col-12 p-0 desings mb-3" id="">' +
                                '<div class="card border-0 d-flex flex-row justify-content-center ">' +
                                '<a href="/get_detail_design/'+element.id+'">'+
                                '<img src="../' + record +
                                '" class="card-img-top-list animate" alt="Imagen del producto">' +
                                '</a><div class="card-body  desingsCardBody ">' +
                                '<h5 class="card-title">' + element.name + '</h5>' +
                                '<p class="card-text ">' + descriptionelementfirst +
                                '</p> </div><a class="description-vermas  " href="/get_detail_design/' +
                                element.id +
                                '"><svg fill="#fff" height="45px" width="45px" class="mx-2 "  viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><g fill=""> <path d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" /> <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" /></g></svg></a></div></div>'


                            )

                        });
                        pagination.empty();
                        $.each(data.links, function(index, element) {

                            if (index == 0) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateCat(' +
                                    before_page + ',' + category +
                                    ') ">Anterior</button></li>'
                                );
                            } else if (index == data.links.length - 1) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateCat(' +
                                    after_page + ',' + category +
                                    ') ">Siguiente</button></li>'
                                );
                            } else {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateCat(' +
                                    element.label + ',' + category + ') ">' + element.label +
                                    '</button></li>'
                                );
                            }



                        });
                    }
                }
            });
        }

        function paginateSub(page, subcategory) {
            console.log(subcategory);
            let disenos = $('.card-group-disenos');
            let pagination = $('#pagination');
            let onsection = document.querySelector("#icon-disenos-onsection");
            let offsection = document.querySelector("#icon-disenos-offsection");
            let boolonsection = onsection.classList.contains('icon-disenos-onsection');
            let booloffsection = offsection.classList.contains('icon-disenos-offsection');
            $.ajax({
                url: "{{ route('get.designsbysubcategory') }}",
                method: 'GET',
                data: {
                    subcategory: subcategory,
                    page: page,

                },
                success: function(data) {
                    if (boolonsection == true && booloffsection == true) {

                        let current_page = parseInt(data.current_page);
                        let before_page = parseInt(data.current_page) - 1;
                        let after_page = parseInt(data.current_page) + 1;
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

                            if (element.records.length == 0) {
                                var record = 'img/default.png';
                            } else {
                                var record = element.records[0].url;
                            }

                            disenos.append(
                                '<div class="col-12 col-md-2 mx-3 p-0 desings mb-3" id="">' +
                                '<div class="card border-0 d-flex flex-row justify-content-center ">' +
                                '<a href="/get_detail_design/'+element.id+'">'+
                                '<img src="../' + record +
                                '" class="card-img-top animate" alt="Imagen del producto">' +
                                '</a><div class="card-body d-none desingsCardBody ">' +
                                '<h5 class="card-title">' + element.name + '</h5>' +
                                '<p class="card-text ">' + descriptionelementfirst +
                                '</p> </div><a class="description-vermas d-none " href="/get_detail_design/' +
                                element.id +
                                '"><svg fill="#fff" height="45px" width="45px" class="mx-2 "  viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><g fill=""> <path d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" /> <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" /></g></svg></a></div></div>'

                            );
                        });
                        pagination.empty();
                        $.each(data.links, function(index, element) {
                            if (index == 0) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateSub(' +
                                    before_page + ',' + subcategory + ') ">Anterior</button></li>'
                                );
                            } else if (index == data.links.length - 1) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateSub(' +
                                    after_page + ',' + subcategory + ') ">Siguiente</button></li>'
                                );
                            } else {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateSub(' +
                                    element.label + ',' + subcategory + ') ">' + element.label +
                                    '</button></li>'
                                );
                            }


                        });


                    } else {
                        let current_page = parseInt(data.current_page);
                        let before_page = parseInt(data.current_page) - 1;
                        let after_page = parseInt(data.current_page) + 1;
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
                                '<div class="col-12 p-0 desings mb-3" id="">' +
                                '<div class="card border-0 d-flex flex-row justify-content-center ">' +
                                '<a href="/get_detail_design/'+element.id+'">'+
                                '<img src="../' + record +
                                '" class="card-img-top-list animate" alt="Imagen del producto">' +
                                '</a><div class="card-body  desingsCardBody ">' +
                                '<h5 class="card-title">' + element.name + '</h5>' +
                                '<p class="card-text ">' + descriptionelementfirst +
                                '</p> </div><a class="description-vermas  " href="/get_detail_design/' +
                                element.id +
                                '"><svg fill="#fff" height="45px" width="45px" class="mx-2 "  viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><g fill=""> <path d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" /> <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" /></g></svg></a></div></div>'


                            )

                        });
                        pagination.empty();
                        $.each(data.links, function(index, element) {

                            if (index == 0) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateSub(' +
                                    before_page + ',' + subcategory +
                                    ') ">Anterior</button></li>'
                                );
                            } else if (index == data.links.length - 1) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateSub(' +
                                    after_page + ',' + subcategory +
                                    ') ">Siguiente</button></li>'
                                );
                            } else {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateSub(' +
                                    element.label + ',' + subcategory + ') ">' + element.label +
                                    '</button></li>'
                                );
                            }



                        });
                    }
                }
            });
        }



        function changebysubcategory(subcategory) {
            let disenos = $('.card-group-disenos');
            let pagination = $('#pagination');
            let titleDesignsByCategory = document.querySelector('#titleDesignsByCategory');
            let onsection = document.querySelector("#icon-disenos-onsection");
            let offsection = document.querySelector("#icon-disenos-offsection");
            let boolonsection = onsection.classList.contains('icon-disenos-onsection');
            let booloffsection = offsection.classList.contains('icon-disenos-offsection');
            /* if true or false */

            $.ajax({
                url: "{{ route('get.designsbysubcategory') }}",
                method: 'GET',
                data: {
                    subcategory: subcategory.value,

                },
                success: function(data) {
                    if (boolonsection == true && booloffsection == true) {

                        let current_page = parseInt(data.current_page);
                        let before_page = parseInt(data.current_page) - 1;
                        let after_page = parseInt(data.current_page) + 1;
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
                        titleDesignsByCategory.innerHTML = "";
                        titleDesignsByCategory.append('' + subcategory.options[subcategory.selectedIndex].text +
                            '');
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


                            disenos.append(
                                '<div class="col-12 col-md-2 mx-3 p-0 desings mb-3" id="">' +
                                '<div class="card border-0 d-flex flex-row justify-content-center ">' +
                                '<a href="/get_detail_design/'+element.id+'">'+
                                '<img src="../' + record +
                                '" class="card-img-top animate" alt="Imagen del producto">' +
                                '</a><div class="card-body d-none desingsCardBody ">' +
                                '<h5 class="card-title">' + element.name + '</h5>' +
                                '<p class="card-text ">' + descriptionelementfirst +
                                '</p> </div><a class="description-vermas d-none " href="/get_detail_design/' +
                                element.id +
                                '"><svg fill="#fff" height="45px" width="45px" class="mx-2 "  viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><g fill=""> <path d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" /> <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" /></g></svg></a></div></div>'


                            );

                        });
                        pagination.empty();
                        $.each(data.links, function(index, element) {
                            if (index == 0) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateSub(' +
                                    before_page + ',' + subcategory.value +
                                    ') ">Anterior</button></li>'
                                );
                            } else if (index == data.links.length - 1) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateSub(' +
                                    after_page + ',' + subcategory.value +
                                    ') ">Siguiente</button></li>'
                                );
                            } else {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateSub(' +
                                    element.label + ',' + subcategory.value + ') ">' + element
                                    .label +
                                    '</button></li>'
                                );
                            }



                        });


                    } else {
                        let current_page = parseInt(data.current_page);
                        let before_page = parseInt(data.current_page) - 1;
                        let after_page = parseInt(data.current_page) + 1;
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
                        titleDesignsByCategory.innerHTML = "";
                        titleDesignsByCategory.append('' + subcategory.options[subcategory.selectedIndex].text +
                            '');
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


                            disenos.append(
                                '<div class="col-12 p-0 desings mb-3" id="">' +
                                '<div class="card border-0 d-flex flex-row justify-content-center ">' +
                                '<a href="/get_detail_design/'+element.id+'">'+
                                '<img src="../' + record +
                                '" class="card-img-top-list animate" alt="Imagen del producto">' +
                                '</a><div class="card-body  desingsCardBody ">' +
                                '<h5 class="card-title">' + element.name + '</h5>' +
                                '<p class="card-text ">' + descriptionelementfirst +
                                '</p> </div><a class="description-vermas  " href="/get_detail_design/' +
                                element.id +
                                '"><svg fill="#fff" height="45px" width="45px" class="mx-2 "  viewBox="0 0 12 12" width="12" xmlns="http://www.w3.org/2000/svg"><g fill=""> <path d="m1.97408 6.65857c-.0875.26168-.37048.40305-.6323.31578-.26197-.08733-.403554-.37049-.31623-.63246-.00911.03046.00037-.00111.00037-.00111.00553-.0164.01143-.03267.01747-.04889.01029-.02765.02508-.06585.04477-.1131.03933-.09441.09843-.22545.18048-.38092.16366-.31009.42137-.72249.80017-1.13573.76531-.83488 2.01773-1.66214 3.93108-1.66214s3.16577.82726 3.93108 1.66214c.37883.41324.63653.82564.80013 1.13573.0821.15547.1412.28651.1805.38092.0197.04725.0345.08545.0448.1131.0031.00826.0134.06058.0233.11084.009.0457.0177.08969.0203.09727 0 0 .0835.33252-.342.47435-.2614.08714-.5439-.05367-.6319-.31459l-.0004-.00119-.0004-.00109-.0061-.01675c-.006-.01629-.0162-.04254-.03065-.07732-.02902-.06966-.0754-.17299-.14179-.29878-.13322-.25241-.34425-.59001-.65295-.92677-.60969-.66512-1.60727-1.33786-3.19392-1.33786s-2.58423.67274-3.19392 1.33786c-.3087.33676-.51973.67436-.65295.92677-.06638.12579-.11276.22912-.14179.29878-.01449.03478-.0246.06103-.03066.07732z" /> <path d="m4 7c0-1.10457.89543-2 2-2s2 .89543 2 2-.89543 2-2 2-2-.89543-2-2z" /></g></svg></a></div></div>'


                            )

                        });
                        pagination.empty();
                        $.each(data.links, function(index, element) {
                            if (index == 0) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateSub(' +
                                    before_page + ',' + subcategory.value +
                                    ') ">Anterior</button></li>'
                                );
                            } else if (index == data.links.length - 1) {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateSub(' +
                                    after_page + ',' + subcategory.value +
                                    ') ">Siguiente</button></li>'
                                );
                            } else {
                                pagination.append(
                                    '<li class="page-item"><button class="page-link" onclick="paginateSub(' +
                                    element.label + ',' + subcategory.value + ') ">' + element
                                    .label +
                                    '</button></li>'
                                );
                            }



                        });
                    }

                }
            });
        };
    </script>
@endsection
