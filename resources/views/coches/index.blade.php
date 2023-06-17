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
        <h2>Listado de coches</h2>

        @if (Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        
        <div class="row">
            <div class="col-6 text-start">{{$coches->links()}}</div>
            <div class="col-6 text-end">
                <p>Nuevo coche <a href="{{route('coches.create')}}" class="btn btn-success ml-2">+</a></p>
            </div>
        </div>

        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Operaciones</th>
            </tr>
            @foreach($coches as $coche)
                <tr>
                    <td>{{$coche->id}}</td>
                    <td>{{$coche->marca}}</td>
                    <td>{{$coche->modelo}}</td>
                    <td class="text-center p-0">
                        <a class="btn btn-success" href="{{route('coches.show', $coche->id)}}">
                            <img heigh="20" width="20" src="{{asset('images/buttons/show.svg')}}" alt="Detalles" title="Detalles">
                        </a>
                        <a class="btn btn-warning" href="{{route('coches.edit', $coche->id)}}">
                            <img heigh="20" width="20" src="{{asset('images/buttons/update.svg')}}" alt="Modificar" title="Modificar">
                        </a>
                        <a class="btn btn-danger" href="{{route('coches.delete', $coche->id)}}">
                            <img heigh="20" width="20" src="{{asset('images/buttons/delete.svg')}}" alt="Borrar" title="Borrar">
                        </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="4">Mostrando {{sizeof($coches)}} de {{$total}}.</td>
            </tr>
        </table>

        <div class="btn-group" role="group" label="Links">
            <a href="{{url('/')}}" class="btn btn-primary mr-2">Inicio</a>
        </div>
    </main>

    <footer class="page-footer font-small p-4 bg-light">
        <p>Aplicación creada por <a href="https://github.com/Victor-369">Víctor García</a> como ejemplo. Desarrollada utilizando <b>Laravel</b> y <b>Bootstrap</b>.</p>
    </footer>
</body>
</html>