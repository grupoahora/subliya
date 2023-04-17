@extends('adminlte::page')

@section('title',  __('adminlte::adminlte.Create Category'))

@section('content_header')
    <nav aria-label="breadcrumb ">
        {{-- <h1>{{ __('adminlte::adminlte.Catalog') }}</h1> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Categorias</a></li>
            <li class="breadcrumb-item active" aria-current="page">Crear categorías</li>
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
                        <span class="card-title">{{ __('adminlte::adminlte.Create Category')}}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categories.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('category.form')

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