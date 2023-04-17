@extends('adminlte::page')

@section('title',  $configuration->name .' '.__('adminlte::adminlte.Configuration'))

@section('content_header')
    <h1>{{ __('adminlte::adminlte.Configuration').' '.$configuration->name}}</h1>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('adminlte::adminlte.Show Configuration')}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('configurations.index') }}">{{ __('adminlte::adminlte.Back')}}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Email')}}:</strong>
                            {{ $configuration->email }}
                        </div>
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Whatsapp')}}:</strong>
                            {{ $configuration->whatsapp }}
                        </div>
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Logo')}}:</strong>
                            {{ $configuration->logo }}
                        </div>
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Facebook')}}:</strong>
                            {{ $configuration->facebook }}
                        </div>
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Twitter')}}:</strong>
                            {{ $configuration->twitter }}
                        </div>
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Youtube')}}:</strong>
                            {{ $configuration->youtube }}
                        </div>
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Linkedin')}}:</strong>
                            {{ $configuration->linkedin }}
                        </div>
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Instagram')}}:</strong>
                            {{ $configuration->instagram }}
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