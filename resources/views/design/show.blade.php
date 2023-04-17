@extends('adminlte::page')

@section('title',  $design->name .' '.__('adminlte::adminlte.Design'))

@section('content_header')
    <h1>{{ __('adminlte::adminlte.Design').' '.$design->name}}</h1>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('adminlte::adminlte.Show Design')}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('designs.index') }}">{{ __('adminlte::adminlte.Back')}}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Name')}}:</strong>
                            {{ $design->name }}
                        </div>
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Reference')}}:</strong>
                            {{ $design->reference }}
                        </div>
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Category Id')}}:</strong>
                            {{ $design->category_id }}
                        </div>
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Subcategory Id')}}:</strong>
                            {{ $design->subcategory_id }}
                        </div>
                        <div class="form-group">
                            <strong>{{__('adminlte::adminlte.Status Id')}}:</strong>
                            {{ $design->status_id }}
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