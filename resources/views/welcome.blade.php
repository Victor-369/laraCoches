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

    <h1 class="my-2">Primer ejemplo con Laravel</h1>
    <main>
        <h2>Bienvenido a LaraCoches</h2>
        <p>Implementación de un <b>CRUD</b> de coches.</p>
        <figure class="row mt-2 mb-2 col-10 offset-1">
            <img class="d-block w-100" 
                alt="Coche de Caneda Akira"
                src="{{asset('images/coches/coche0.jpg')}}">
        </figure>
    </main>

    <footer class="page-footer font-small p-4 bg-light">
        <p>Aplicación creada por <a href="https://github.com/Victor-369">Víctor García</a> como ejemplo. Desarrollada utilizando <b>Laravel</b> y <b>Bootstrap</b>. Las imágenes son propiedad de sus respectivos dueños.</p>
    </footer>
</body>
</html>