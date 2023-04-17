<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subliya</title>
</head>
<body>
    <h1>Nuevo mensaje desde subliya.com</h1>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Mensaje</th>
                    <th scope="col">sucripción</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->mobile}}</td>
                    <td>{{$data->message}}</td>
                    <td>
                        @if (isset($data->suscribirse))
                        {{$data->suscribirse}}
                        @else
                          off  
                        @endif</td>
                </tr>
                
               
            </tbody>
        </table>
    </div>
    {{-- 
    {{$data}} --}}
</body>
</html>