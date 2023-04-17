@extends('adminlte::page')

@section('title', __('adminlte::adminlte.Catalog'))

@section('content_header')
    <nav aria-label="breadcrumb ">
        {{-- <h1>{{ __('adminlte::adminlte.Catalog') }}</h1> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Catalogos</li>
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
                                {{ __('adminlte::adminlte.Catalog') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('catalogs.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    Nuevo Catalogo
                                </a>
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
                            <table class="table table-striped table-hover" id="TableCatalogs">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>{{ __('adminlte::adminlte.Name') }}</th>
                                        <th>{{ __('adminlte::adminlte.Description') }}</th>
                                        <th>{{ __('adminlte::adminlte.Ownerscategories') }}</th>
                                        <th>{{ __('adminlte::adminlte.Ownerssubcategories') }}</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($catalogs as $catalog)
                                        <tr>
                                            <td>{{ $catalog->id }}</td>

                                            <td>{{ $catalog->name }}</td>
                                            <td>{{ $catalog->description }}</td>
                                            <td>
                                                @foreach ($catalog->designs->groupBy('category_id') as $key => $design)
                                                    {{ $catalog->get_category_name_by_design_and_catalog($key) }}
                                                @endforeach
                                               
                                            </td>
                                            <td>
                                                @foreach ($catalog->designs->groupBy('subcategory_id') as $key => $design)
                                                    {{ $catalog->get_subcategory_name_by_design_and_catalog($key) }}
                                                @endforeach
                                            </td>

                                            <td>
                                                <form action="{{ route('catalogs.destroy', $catalog->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('catalogs.show', $catalog->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i>
                                                        {{ __('adminlte::adminlte.Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('catalogs.edit', $catalog->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i>{{ __('adminlte::adminlte.Edit') }}</a>
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
                {{-- {!! $catalogs->links() !!} --}}
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
            $('#TableCatalogs').DataTable({
                dom: 'Bfrtip',
                autoFill: true,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

@stop
