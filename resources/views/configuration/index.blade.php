@extends('adminlte::page')

@section('title', __('adminlte::adminlte.Configuration'))

@section('content_header')
    <h1>{{ __('adminlte::adminlte.Configuration') }}</h1>
@stop

@section('content')
    
        @if ($message = Session::get('info'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
        <div class="card-group">


            <div class="card w-100" style="width: 18rem;">
                <div class="card-header ">
                    <h4 class="">Cambiar contraseña</h4>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{route('renewpass')}}" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            {!! Form::label('old_pass', 'Contraseña Anterior', []) !!}
                            {!! Form::text('old_pass', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('new_pass', 'Nueva Contraseña', []) !!}
                            {!! Form::text('new_pass', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('repeat_new_pass', 'Repetir Nueva Contraseña', []) !!}
                            {!! Form::text('repeat_new_pass', null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}
                    </form>
                </div>
            </div>
            <div class="card w-100" style="width: 18rem;">
                <div class="card-header ">
                    <h4 class="">Cambiar Redes Sociales</h4>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{route('redessociales')}}" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            {!! Form::label('Facebook', 'Facebook', []) !!}
                            {!! Form::text('Facebook', $configuration->facebook, ['class' => 'form-control', 'placeholder' => $configuration->facebook ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Instagram', 'Instagram', []) !!}
                            {!! Form::text('Instagram', $configuration->instagram, ['class' => 'form-control', 'placeholder' => $configuration->instagram ]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Whatsapp', 'Whatsapp', []) !!}
                            {!! Form::text('Whatsapp', $configuration->whatsapp, ['class' => 'form-control', 'placeholder' => $configuration->whatsapp ]) !!}
                        </div>

                        {!! Form::submit('Actualizar', ['class' => 'btn btn-success']) !!}
                    </form>
                </div>
            </div>
            
        </div>
    
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
