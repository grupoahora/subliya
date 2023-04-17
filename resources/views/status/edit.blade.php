@extends('adminlte::page')

@section('title',  __('adminlte::adminlte.Update Status'))

@section('content_header')
    <h1>{{ __('adminlte::adminlte.Update Status')}}</h1>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('adminlte::adminlte.Update Status')}}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('statuses.update', $status->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('status.form')

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