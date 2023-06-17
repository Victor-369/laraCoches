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
                <a class="nav-link active" href="{{url('/')}}">Inicio</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link" href="{{route('coches.index')}}">Garaje</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link" href="{{route('coches.create')}}">Nuevo coche</a>
            </li>
        </ul>
    </nav>

    <h1 class="my-2">Gestor de coches LaraCoches</h1>
    <main>
        <h2>Actualización del coche {{"$coche->marca $coche->modelo"}}</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif


        <form class="my-2 border p-5" method="POST" action="{{route('coches.update', $coche->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="inputMarca" class="col-sm-2 col-form-label">Marca</label>
                <input name="marca" value="{{$coche->marca}}" type="text" class="up form-control col-sm-10" id="inputMarca" placeholder="Marca" maxlengh="255" required value="{{old('marca')}}">
            </div>
            <div class="form-group row">
                <label for="inputModelo" class="col-sm-2 col-form-label">Modelo</label>
                <input name="modelo" value="{{$coche->modelo}}" type="text" class="up form-control col-sm-10" id="inputModelo" placeholder="Modelo" maxlengh="255" required value="{{old('modelo')}}">
            </div>
            <div class="form-group row">
                <label for="inputkms" class="col-sm-2 col-form-label">Kms</label>
                <input name="kms" value="{{$coche->kms}}" type="number" class="up form-control col-sm-4" id="inputkms" required value="{{old('kms')}}">
            </div>
            <div class="form-group row">
                <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
                <input name="precio" value="{{$coche->precio}}" type="number" class="up form-control col-sm-4" id="inputPrecio" maxlength="11" required min="0" step="0.01" value="{{old('precio')}}">
            </div>
            <div class="form-group row">
                <div class="form-check">
                    <input name="matriculado" value="1" class="form-check-input" type="checkbox" {{$coche->matriculado? "checked" : ""}}>
                    <label class="form-check-label">Matriculado</label>
                </div>
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-success m-2 mt-5">Guardar</button>
                <button type="reset" class="btn btn-secondary m-2">Reestablecer</button>
            </div>
        </form>
        <div class="text-end my-3">
            <div class="btn-group mx-2">
                <a class="mx-2" href="{{route('coches.show', $coche->id)}}">
                    <img heigh="40" width="40" src="{{asset('image/buttons/show.png')}}" alt="Detalles" title="Detalles">
                </a>
                <a class="mx-2" href="{{route('coches.delete', $coche->id)}}">
                    <img heigh="40" width="40" src="{{asset('image/buttons/delete.png')}}" alt="Borrar" title="Borrar">
                </a>
            </div>
        </div>
        <div class="btn-group" role="group" aria-label="Links">
            <a href="{{url('/')}}" class="btn btn-primary m-2">Inicio</a>
            <a href="{{route('coches.index')}}" class="btn btn-primary m-2">Garaje</a>
        </div>
    </main>

    <footer class="page-footer font-small p-4 bg-light">
        <p>Aplicación creada por Víctor García como ejemplo. Desarrollada utilizando <b>Laravel</b> y <b>Bootstrap</b>.</p>
    </footer>
</body>
</html>