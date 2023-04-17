@extends('adminlte::page')

@section('title',  __('adminlte::adminlte.Update Configuration'))

@section('content_header')
    <h1>{{ __('adminlte::adminlte.Update Configuration')}}</h1>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('adminlte::adminlte.Update Configuration')}}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('configurations.update', $configuration->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('configuration.form')

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