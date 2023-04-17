@extends('adminlte::page')

@section('title', __('adminlte::adminlte.Update Category'))

@section('content_header')
    <nav aria-label="breadcrumb ">
        {{-- <h1>{{ __('adminlte::adminlte.Catalog') }}</h1> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Categorías</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar {{$category->name}}</li>
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
                        <span class="card-title">{{ __('adminlte::adminlte.Update Category') }}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categories.update', $category->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('category.form')

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Sub Categorías</span>
                        <div class="float-right">
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
                                            <h5 class="modal-title" id="staticBackdropdosLabel">Nuevo diseño</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('categories.update', $category->id) }}"
                                                role="form" enctype="multipart/form-data">
                                                {{ method_field('PATCH') }}
                                                @csrf

                                                <div class="row">

                                                    <div class="col-12">
                                                        <div class="form-group w-100 d-flex flex-column">
                                                            <select name="subcategory_id[]" id="subcategory_id"
                                                                class="js-example-basic-multiple" data-actions-box="true"
                                                                data-live-search="true" multiple>
                                                                @foreach ($subcategories as $subcategory)
                                                                    <option
                                                                        data-content="<span class='badge badge-success'>{{ $subcategory->name }}</span>"
                                                                        value="{{ $subcategory->id }}"
                                                                        {{ collect(old('subcategory_id', $category->subcategories->pluck('id')))->contains($subcategory->id) ? 'disabled' : '' }}>
                                                                        {{ $subcategory->name }}
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
                                            <h5 class="modal-title" id="staticBackdropLabel">Nuevo Subcategoría</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('subcategories.store') }}" role="form"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div class="row">

                                                    <div class="col-12">
                                                        <input type="hidden" name="category" value="{{ $category->id }}">
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
                        <br>
                        
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
                                    @foreach ($category->subcategories as $subcategory)
                                        <tr class="">
                                            <td scope="row">{{ $subcategory->id }}</td>
                                            <td>{{ $subcategory->name }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary "
                                                    href="{{ route('subcategories.show', $subcategory->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i>
                                                    {{ __('adminlte::adminlte.Show') }}
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('subcategories.edit', $subcategory->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i>{{ __('adminlte::adminlte.Edit') }}
                                                </a>
                                            </td>
                                            {{-- <td>
                                                <form action="{{ route('subcategories.destroy', $subcategory->id) }}"
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
                                                    action="{{ route('subcategories.desactivate', [$category->id, $subcategory->id]) }}"
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
    {!! Html::style('css/jquery-ui.min.css') !!}
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet"
        type="text/css" />
    {!! Html::style('css/select2.min.css') !!}
    {!! Html::style('fileinput/css/fileinput.min.css') !!}
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {!! Html::script('js/jquery-ui.min.js') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    {!! Html::script('fileinput/js/fileinput.min.js') !!}
    {!! Html::script('fileinput/js/locales/es.js') !!}
    {!! Html::script('fileinput/themes/fas/theme.js') !!}
     <script>
        $(document).ready(function() {
            var krajeeGetCount = function(id) {
                var cnt = $('#' + id).fileinput('getFilesCount');
                return cnt === 0 ? 'You have no files remaining.' :
                    'You have ' +  cnt + ' file' + (cnt > 1 ? 's' : '') + ' remaining.';
            };
            $("#files").fileinput({
                language: "es",
                theme: "fas",
                browseOnZoneClick: true,
                uploadUrl: "../../upload_image_category/{{$category->id}}",
                showClose: false,
                uploadExtraData:{'_token':$("#csrf_token").val()},
                initialPreview: [
                    <?php foreach ($category->records as $record)
                    {
                    echo '"'.asset($record->url).'",';
                    } ?>
                ],
                initialPreviewAsData: true,
                initialPreviewFileType: 'image',
                initialPreviewConfig: [<?php foreach ($category->records as $record)
                {
                    echo '{width:"120px",key:'.$record->id.'},';
                } ?>],
                overwriteInitial: false,
                validateInitialCount: true,
                minFileCount: 0,
                maxFileCount: 1,
                maxFileSize: 2100,
                browseClass: "btn btn-primary btn-block",
                showCaption: false,
                showRemove: false,
                showUpload: false,
                deleteUrl: "../../file_delete",
                deleteExtraData:{'_token':$("#csrf_token").val()},
            }).on('filebeforedelete', function() {
                return new Promise(function(resolve, reject) {
                    $.confirm({
                        title: 'Confirmación!',
                    content: '¿Estás seguro de que quieres eliminar este archivo?',
                        type: 'red',
                        buttons: {   
                            ok: {
                                btnClass: 'btn-primary text-white',
                                keys: ['enter'],
                                action: function(){
                                    resolve();
                                }
                            },
                            cancel: function(){
                            $.alert ('¡Se canceló la eliminación del archivo!');
                            }
                        }
                    });
                });
            }).on('filedeleted', function() {
                setTimeout(function() {
                $.alert('¡La eliminación del archivo se realizó correctamente! ' );
                }, 900);
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
