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
                <a class="nav-link" href="{{route('coches.index')}}">Garaje</a>
            </li>
            <li class="nav-item mr-2">
                <a class="nav-link active" href="{{route('coches.create')}}">Nuevo coche</a>
            </li>
        </ul>
    </nav>

    <h1 class="my-2">Gestor de coches LaraCoches</h1>
    <main>
        <h2>Nuevo coche</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form class="my-2 border p-5" method="POST" action="{{route('coches.store')}}">
            @csrf
            <div class="form-group row">
                <label for="inputMarca" class="col-sm-2 col-form-label">Marca</label>
                <input name="marca" type="text" class="up form-control col-sm-10" id="inputMarca" placeholder="Marca" maxlengh="255" required value="{{old('marca')}}">
            </div>
            <div class="form-group row">
                <label for="inputModelo" class="col-sm-2 col-form-label">Modelo</label>
                <input name="modelo" type="text" class="up form-control col-sm-10" id="inputModelo" placeholder="Modelo" maxlengh="255" required value="{{old('modelo')}}">
            </div>
            <div class="form-group row">
                <label for="inputkms" class="col-sm-2 col-form-label">Kms</label>
                <input name="kms" type="number" class="up form-control col-sm-4" id="inputkms" required value="{{old('kms')}}">
            </div>
            <div class="form-group row">
                <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
                <input name="precio" type="number" class="up form-control col-sm-4" id="inputPrecio" maxlength="11" required min="0" step="0.01" value="{{old('precio')}}">
            </div>
            <div class="form-group row">
                <div class="form-check">
                    <input name="matriculado" value="1" class="form-check-input" type="checkbox" {{empty(old('matriculado'))? "" : "checked"}}>
                    <label class="form-check-label">Matriculado</label>
                </div>
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-success m-2 mt-5">Guardar</button>
                <button type="reset" class="btn btn-secondary m-2">Borrar</button>
            </div>
        </form>

    </main>

    <footer class="page-footer font-small p-4 bg-light">
        <p>Aplicación creada por <a href="https://github.com/Victor-369">Víctor García</a> como ejemplo. Desarrollada utilizando <b>Laravel</b> y <b>Bootstrap</b>.</p>
    </footer>
</body>
</html>