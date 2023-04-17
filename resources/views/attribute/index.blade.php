@extends('adminlte::page')

@section('title', __('adminlte::adminlte.Attribute'))

@section('content_header')
    <nav aria-label="breadcrumb ">
        {{-- <h1>{{ __('adminlte::adminlte.Catalog') }}</h1> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Atributos</li>
        </ol>
    </nav>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('adminlte::adminlte.Attribute') }}
                            </span>

                            <div class="float-right">
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
                                                <h5 class="modal-title" id="staticBackdropLabel">Nueva Atributo</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('attributes.store') }}" role="form"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row">

                                                        <div class="col-12">

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
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" id="TableAttrs">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>{{ __('adminlte::adminlte.Name') }}</th>

                                        <th class="col-1"></th>
                                        <th class="col-1"></th>
                                        <th class="col-1"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($attributes as $attribute)
                                        <tr>
                                            <td >{{ $attribute->id }}</td>

                                            <td >{{ $attribute->name }}</td>
                                            <td class="col-1">
                                                <a class="btn btn-sm btn-primary "
                                                    href="{{ route('attributes.show', $attribute->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i>
                                                    {{ __('adminlte::adminlte.Show') }}</a>
                                            </td>
                                            <td class="col-1">
                                                <button type="button" class="btn btn-success btn-sm " data-placement="left"
                                                    data-toggle="modal" data-target="#staticBackdrop{{$attribute->id}}">
                                                    {{ __('adminlte::adminlte.Update Attribute') }}
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="staticBackdrop{{$attribute->id}}" data-backdrop="static"
                                                    data-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdrop{{$attribute->id}}Label" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdrop{{$attribute->id}}Label">
                                                                    Editar Atributo</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="POST"
                                                                    action="{{ route('attributes.update', $attribute->id) }}"
                                                                    role="form" enctype="multipart/form-data">
                                                                    {{ method_field('PATCH') }}
                                                                    @csrf

                                                                    <div class="row">

                                                                        <div class="col-12">

                                                                            <div class="form-group ">
                                                                                {{ Form::label(__('adminlte::adminlte.Name')) }}
                                                                                {{ Form::text('name', $attribute->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => __('adminlte::adminlte.Name')]) }}
                                                                                {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                                                                            </div>
                                                                        </div>


                                                                    </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cerrar</button>

                                                                <button type="submit"
                                                                    class="btn btn-primary">Guardar</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="col-1">
                                                <form action="{{ route('attributes.destroy', $attribute->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i>
                                                        {{ __('adminlte::adminlte.Delete') }}</button>
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

    @endsection
@section('css')
<link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@stop

@section('js')
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jqueryui-editable/js/jqueryui-editable.min.js"></script>

    <script src="/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.buttons.min.js"></script>
    <script src="/js/jszip.min.js"></script>
    <script src="/js/pdfmake.min.js"></script>
    <script src="/js/vfs_fonts.js"></script>
    <script src="/js/buttons.html5.min.js"></script>
    <script src="/js/buttons.print.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#TableAttrs').DataTable({
                dom: 'Bfrtip',
                autoFill: true,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    
@stop
