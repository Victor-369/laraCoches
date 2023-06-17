<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Aplicación de gestión de coches LaraCoches">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <title>{{config('app.name')}} - PORTADA</title>
</head>
<body class="container p-3">
    <nav>
        <ul class="nav nav-pills my-3">
            <li class="nav-item mr-2">
                <a class="nav-link" href="{{url('/')}}">Inicio</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link active" href="{{route('coches.index')}}">Garaje</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link" href="{{route('coches.create')}}">Nuevo coche</a>
            </li>
        </ul>
    </nav>

    <h1 class="my-2">Gestor de coches LaraCoches</h1>
    <main>
        <h2>Detalles del coche {{"$coche->marca $coche->modelo"}}</h2>

        @if (Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <table class="table table-striped table-bordered">
            <tr>
                <td>ID</td>
                <td>{{$coche->id}}</td>
            </tr>
            <tr>
                <td>Marca</td>
                <td>{{$coche->marca}}</td>
            </tr>
            <tr>
                <td>Modelo</td>
                <td>{{$coche->modelo}}</td>
            </tr>
            <tr>
                <td>Precio</td>
                <td>{{$coche->precio}}</td>
            </tr>
            <tr>
                <td>Kms</td>
                <td>{{$coche->kms}}</td>
            </tr>
            <tr>
                <td>Matriculado</td>
                <td>{{$coche->matriculado? 'SI': 'NO'}}</td>
            </tr>
        </table>
            <div class="text-end my-3">
                <div class="btn-group mx-2">
                    <a class="mx-2" href="{{route('coches.edit', $coche->id)}}">
                        <img heigh="40" width="40" src="{{asset('images/buttons/update.png')}}" alt="Modificar" title="Modificar">
                    </a>
                    <a class="mx-2" href="{{route('coches.delete', $coche->id)}}">
                        <img heigh="40" width="40" src="{{asset('images/buttons/delete.png')}}" alt="Borrar" title="Borrar">
                    </a>
                </div>
            </div>
            <div class="btn-group" role="group" aria-label="Links">
                <a href="{{url('/')}}" class="btn btn-primary m-2">Inicio</a>
                <a href="{{route('coches.index')}}" class="btn btn-primary m-2">Garaje</a>
            </div>
    </main>

    <footer class="page-footer font-small p-4 bg-light">
        <p>Aplicación creada por <a href="https://github.com/Victor-369">Víctor García</a> como ejemplo. Desarrollada utilizando <b>Laravel</b> y <b>Bootstrap</b>.</p>
    </footer>
</body>
</html>