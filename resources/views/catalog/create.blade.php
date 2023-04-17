@extends('adminlte::page')

@section('title', __('adminlte::adminlte.Create Catalog'))

@section('content_header')
    <nav aria-label="breadcrumb ">
        {{-- <h1>{{ __('adminlte::adminlte.Catalog') }}</h1> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('catalogs.index')}}">Diseños</a></li>
            <li class="breadcrumb-item active" aria-current="page">Crear catalogo</li>
        </ol>
    </nav>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('adminlte::adminlte.Create Catalog') }}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('catalogs.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('catalog.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">


@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        const category = $('#category_id');
        const selects = $('.js-example-basic-multiple');
        const designsByCategoriesOrSubcategories = $('#designs_by_categories_or_subcategories');
        const subcategory = $('#subcategory_id');
        selects.change(function () {
            $.ajax({
                url: "{{ route('get.designsbysubcategoriesorcategory') }}",
                method: 'GET',
                data: {
                    categories: category.val(),
                    subcategories: subcategory.val(),
                },
                success: function(data) {
                    console.log(data);
                    designsByCategoriesOrSubcategories.empty();
                     $.each(data, function (index, element) {
                        
                        designsByCategoriesOrSubcategories.append(
                        '<div class=" mx-auto "><img src="../../' + element.records[0].url +'" class="rounded-circle mx-auto" style="width:240px; height: auto;" alt=""><input type="checkbox" name="designs[]" value="'+element.id+'" class=" m-0" style="width: 40px" name="" id=""></div>'                        
                        );
                        
                    })
                   /*  subcategory.empty();
                    */

                    
                }
            });
        });
        category.change(function() {

            $.ajax({
                url: "{{ route('get.subcategoriesbycategory') }}",
                method: 'GET',
                data: {
                    categories: category.val(),
                },
                success: function(data) {
                    
                    subcategory.empty();
                    $.each(data, function (index, element) {
                        subcategory.append(
                        '<option value="'+element.id+'">'+element.name+'</option>'
                        );
                        
                    })

                    
                }
            });
            


        });

        
    </script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                  theme: "classic",
            });
        });
    </script>
    <script>
        console.log('Hi!');
    </script>
@stop
