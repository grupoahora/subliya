@extends('adminlte::page')

@section('title', __('adminlte::adminlte.Update Design'))

@section('content_header')
    <nav aria-label="breadcrumb ">
        {{-- <h1>{{ __('adminlte::adminlte.Catalog') }}</h1> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('designs.index')}}">Diseños</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar {{$design->name}}</li>
        </ol>
    </nav>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('adminlte::adminlte.Update Design') }}</span>
                    </div>
                    <div class="card-body">
                        {{-- {!! Form::model($farm, ['route' => ['admin.users.farms.update', compact('farm')], 'method' => 'put']) !!}
                        {!! Form::submit('Guardar', ['class' => 'btn btn-secondary px-2 rounded-3']) !!} --}}
                        <form method="POST" action="{{ route('designs.update', $design->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('design.form')

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('css')
    {!! Html::style('css/jquery-ui.min.css') !!}
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet"
        type="text/css" />
    {!! Html::style('css/select2.min.css') !!}
    {!! Html::style('fileinput/css/fileinput.min.css') !!}
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {!! Html::script('js/jquery-ui.min.js') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    {!! Html::script('fileinput/js/fileinput.min.js') !!}
    {!! Html::script('fileinput/js/locales/es.js') !!}
    {!! Html::script('fileinput/js/plugins/piexif.js') !!}
    {!! Html::script('fileinput/themes/fas/theme.js') !!}
    <script>
        $(document).ready(function() {
            var krajeeGetCount = function(id) {
                var cnt = $('#' + id).fileinput('getFilesCount');
                return cnt === 0 ? 'You have no files remaining.' :
                    'You have ' + cnt + ' file' + (cnt > 1 ? 's' : '') + ' remaining.';
            };
            $("#files").fileinput({
                language: "es",
                theme: "fas",
                browseOnZoneClick: true,
                uploadUrl: "../../upload_image/{{ $design->id }}",
                showClose: false,
                uploadExtraData: {
                    '_token': $("#csrf_token").val()
                },
                initialPreview: [
                    <?php foreach ($design->records as $record) {
                        echo '"' . asset($record->url) . '",';
                    } ?>
                ],
                initialPreviewAsData: true,
                initialPreviewFileType: 'image',
                initialPreviewConfig: [<?php foreach ($design->records as $record) {
                    echo '{width:"120px",key:' . $record->id . '},';
                } ?>],
                overwriteInitial: false,
                validateInitialCount: true,
                minFileCount: 0,
                maxImageWidth: 1080,
                maxImageHeight: 1080,
                resizePreference: 'height',
                resizeImage: true,
                maxFileCount: 5,
                maxFileSize: 2100,
                browseClass: "btn btn-primary btn-block",
                showCaption: false,
                showRemove: false,
                showUpload: false,
                deleteUrl: "../../file_delete",
                deleteExtraData: {
                    '_token': $("#csrf_token").val()
                },
            }).on('filebeforedelete', function() {
                return new Promise(function(resolve, reject) {
                    $.confirm({
                        title: 'Confirmación!',
                        content: '¿Estás seguro de que quieres eliminar este archivo?',
                        type: 'red',
                        buttons: {
                            ok: {
                                btnClass: 'btn-primary text-white',
                                keys: ['enter'],
                                action: function() {
                                    resolve();
                                }
                            },
                            cancel: function() {
                                $.alert('¡Se canceló la eliminación del archivo!');
                            }
                        }
                    });
                });
            }).on('filedeleted', function() {
                setTimeout(function() {
                    $.alert('¡La eliminación del archivo se realizó correctamente! ');
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                theme: "classic",
            });
        });
    </script>
    <script>
        function inputAttr() {
            const input = $(this).attr("id");
            console.log(input);
        }
    </script>
    <script>
        $(document).on('click', '.btn_remove', function() {
            const buttonid = $(this).attr("id");
            const button_id = $('#' + buttonid).parent().parent();
            //cuando da click obtenemos el id del boton
            button_id.remove(); //borra la fila
        });
        const tabla = document.getElementById("tableAttr");
        const tbody = document.getElementById("tableAttr").children[1];
        console.log(tabla);
        const addTable = (data, values, position) => {
            console.log(values);
            return (
                `<td>${position}</td><td><input class="form-control" name="attributos[]" type="text" value="${data}" readonly> </td><td><input class="form-control" name="attroptions[]" type="text" value="${values}" readonly> </td><td><button type="button" name="remove" id="${position}" class="btn btn-danger btn_remove">Quitar</button></td>`
            ) //esto seria lo que contendria la fila
        }
    </script>
    <script>
        let parameters = []

        function inputnamevalues() {
            const $inputnames = document.getElementsByName("inputname[]");
            var result = '';
            for (let index = 0; index < $inputnames.length; index++) {
                result += $inputnames[index].value + ',';
            }
            return result;

        }

        function inputnamevaluesreset() {
            const $inputnames = document.getElementsByName("inputname[]");

            for (let index = 0; index < $inputnames.length; index++) {
                $inputnames[index].value = '';
            }
        };
        const addJsonElement = json => {
            parameters.push(json);
            /* console.log(json); */
            return parameters.length - 1;
        };
        const $form = document.getElementById("frmAttr");
        const $attribute = document.getElementById("attribute");
        const $inputnames = document.getElementsByName("inputname[]");
        const $inputClonejquery = $('#inputClone');
        const $btnAdd = document.getElementById("btnAdd");
        const $btnOp = document.getElementById("btnOp");
        const $btnOffOp = document.getElementById("btnOffOp");
        const $inputCloneParentlast = document.getElementById("inputCloneParentOption");
        const templateElement = (data, values, position) => {
            console.log(data);
            return (`
                    <strong>${position} ${data} - </strong> ${values}
                `)
        };
        const templateElementOption = (data, values, position) => {
            return (`
                    <strong>${position} ${data} - </strong> ${values}
                `)
        };
        $btnOp.addEventListener("click", (event) => {
            const inputCloneParent = document.getElementById("inputCloneParent")
            const inputnameClone = $inputClonejquery.clone().attr('id', '')
            inputnameClone.insertBefore('#lastChild');
        });
        $btnOffOp.addEventListener("click", (event) => {
            const lengthParentLast = $inputnames.length;
            const inputCloneParentlast = $inputCloneParentlast.children[lengthParentLast];
            inputCloneParentlast.remove();
        });
        $btnAdd.addEventListener("click", (event) => {
            if ($attribute.value != "") {
                let index = addJsonElement({
                    name: attribute.value,
                    lastName: inputnamevalues(),
                });
                const tbody = document.getElementById("tableAttr").children[1]
                const tr = document.createElement("tr")
                tr.innerHTML = addTable(`${$attribute.options[attribute.selectedIndex].text}`,
                    inputnamevalues(),
                    index)
                tbody.insertBefore(tr, tbody.lastChild);
                inputnamevaluesreset();
            } else {
                alert("Complete los campos");
            }
        });
    </script>
    <script>
        console.log('Hi!');
    </script>

@stop
