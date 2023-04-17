@extends('adminlte::page')

@section('title', __('adminlte::adminlte.Update Subcategory'))

@section('content_header')
    <nav aria-label="breadcrumb ">
        {{-- <h1>{{ __('adminlte::adminlte.Catalog') }}</h1> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('subcategories.index') }}">Sub categorías</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar {{ $subcategory->name }}</li>
        </ol>
    </nav>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-6">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('adminlte::adminlte.Update SubCategory') }}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('subcategories.update', $subcategory->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('subcategory.form')

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Categorías</span>
                        <div class="float-right mx-2">
                            <button type="button" class="btn btn-primary btn-sm float-right my-2" data-placement="left"
                                data-toggle="modal" data-target="#staticBackdropdos">
                                Agregar Existente
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdropdos" data-backdrop="static" data-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropdosLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropdosLabel">Nuevas Categorias</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST"
                                                action="{{ route('subcategories.update', $subcategory->id) }}"
                                                role="form" enctype="multipart/form-data">
                                                {{ method_field('PATCH') }}
                                                @csrf

                                                <div class="row">

                                                    <div class="col-12">
                                                        <div class="form-group w-100 d-flex flex-column">
                                                            <select name="category_id[]" id="category_id"
                                                                class="js-example-basic-multiple" data-actions-box="true"
                                                                data-live-search="true" multiple>
                                                                @foreach ($categories as $category)
                                                                    <option
                                                                        data-content="<span class='badge badge-success'>{{ $category->name }}</span>"
                                                                        value="{{ $category->id }}"
                                                                        {{ collect(old('category_id', $subcategory->categories->pluck('id')))->contains($category->id) ? 'disabled' : '' }}>
                                                                        {{ $category->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>

                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="button" class="btn btn-primary btn-sm float-right" data-placement="left"
                                data-toggle="modal" data-target="#staticBackdrop">
                                {{ __('adminlte::adminlte.Create New') }}
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Nueva categoría</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('categories.store') }}" role="form"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div class="row">

                                                    <div class="col-12">
                                                        <input type="hidden" name="subcategory"
                                                            value="{{ $subcategory->id }}">
                                                        <div class="form-group ">
                                                            {{ Form::label(__('adminlte::adminlte.Name')) }}
                                                            {{ Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Name')]) }}
                                                            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                                                        </div>
                                                    </div>


                                                </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>

                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="float-right">

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        {{-- <th scope="col"></th> --}}
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subcategory->categories as $category)
                                        <tr class="">
                                            <td scope="row">{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary "
                                                    href="{{ route('categories.show', $category->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i>
                                                    {{ __('adminlte::adminlte.Show') }}
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('categories.edit', $category->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i>{{ __('adminlte::adminlte.Edit') }}
                                                </a>
                                            </td>
                                            {{-- <td>
                                                <form action="{{ route('categories.destroy', $category->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i>
                                                        {{ __('adminlte::adminlte.Delete') }}</button>
                                                </form>
                                            </td> --}}
                                            <td>
                                                <form
                                                    action="{{ route('categories.desactivate', [$category->id, $subcategory->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i>
                                                        Desactivar</button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('css')
    {!! Html::style('css/select2.min.css') !!}

@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
