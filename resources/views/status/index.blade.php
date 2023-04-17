@extends('adminlte::page')

@section('title',__('adminlte::adminlte.Status'))

@section('content_header')
    <h1>{{ __('adminlte::adminlte.Status')}}</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('adminlte::adminlte.Status') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('statuses.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('adminlte::adminlte.Create New') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>{{__('adminlte::adminlte.Name')}}</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($statuses as $status)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $status->name }}</td>

                                            <td>
                                                <form action="{{ route('statuses.destroy',$status->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('statuses.show',$status->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('adminlte::adminlte.Show')}}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('statuses.edit',$status->id) }}"><i class="fa fa-fw fa-edit"></i>{{ __('adminlte::adminlte.Edit')}}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('adminlte::adminlte.Delete')}}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $statuses->links() !!}
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
