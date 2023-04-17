@extends('adminlte::page')

@section('title',  __('adminlte::adminlte.Create Subcategory'))

@section('content_header')
    <nav aria-label="breadcrumb ">
        {{-- <h1>{{ __('adminlte::adminlte.Catalog') }}</h1> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('subcategories.index')}}">Sub categorías</a></li>
            <li class="breadcrumb-item active" aria-current="page">crear Sub Categoría</li>
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
                        <span class="card-title">{{ __('adminlte::adminlte.Create Subcategory')}}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('subcategories.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('subcategory.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop