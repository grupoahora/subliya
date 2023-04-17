@extends('adminlte::page')

@section('title',  $label->name .' '.__('adminlte::adminlte.Label'))

@section('content_header')
    <h1>{{ __('adminlte::adminlte.Label').' '.$label->name}}</h1>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('adminlte::adminlte.Show Label')}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('labels.index') }}">{{ __('adminlte::adminlte.Back')}}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Name')}}:</strong>
                            {{ $label->name }}
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