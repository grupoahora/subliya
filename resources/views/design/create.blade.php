@extends('adminlte::page')

@section('title', __('adminlte::adminlte.Create Design'))

@section('content_header')
    <nav aria-label="breadcrumb ">
        {{-- <h1>{{ __('adminlte::adminlte.Catalog') }}</h1> --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{route('designs.index')}}">Diseños</a></li>
            <li class="breadcrumb-item active" aria-current="page">Crear diseño</li>
        </ol>
    </nav>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title font-weight-bolder">{{ __('adminlte::adminlte.Create Design') }}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('designs.store') }}" role="form"
                            enctype="multipart/form-data">
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
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Latest compiled and minified CSS -->

@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
        console.log('Hi!');
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
@stop
