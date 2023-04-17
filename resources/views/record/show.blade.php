@extends('adminlte::page')

@section('title',  $record->name .' '.__('adminlte::adminlte.Record'))

@section('content_header')
    <h1>{{ __('adminlte::adminlte.Record').' '.$record->name}}</h1>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('adminlte::adminlte.Show Record')}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('records.index') }}">{{ __('adminlte::adminlte.Back')}}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Url')}}:</strong>
                            {{ $record->url }}
                        </div>
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Recordeable Type')}}:</strong>
                            {{ $record->recordeable_type }}
                        </div>
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Recordeable Id')}}:</strong>
                            {{ $record->recordeable_id }}
                        </div>

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