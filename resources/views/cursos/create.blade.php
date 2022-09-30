@extends('layouts.app')

@section('titulo', 'crear curso')

@section('contenido')

 <form action="/cursos" method="POST" enctype="multipart/form-data">
    @csrf

    @if($errors->any())
        @foreach ($errors->all() as $alerta)
        <div class="alert alert-danger">
            <ul>
                <li>{{$alerta}}</li>
            </ul>
        </div>

        @endforeach
    @endif

    <br>
    <h2>Aqui puedes crear un nuevo curso</h2>
    <div class="form-group">
        <label for="nombre">Nombre del curso </label>
        <input id="nombre" class="form-control" type="text" name="nombre">
    </div>
    <div class="form-group">
        <label for="descripcion-">Descripción</label>
        <input id="descripcion" class="form-control" type="text" name="descripcion">
    </div>
    <div class="form-group">
        <label for="duración">Duración</label>
        <input id="duración" class="form-control" type="text" name="duracion">
    </div>
    <div class="form-group">
        <label for="imagen">Cargue la imagen del curso</label>
        <br>
        <input id="imagen" class=" " type="file" name="imagen" accept="image/*">
    </div>
    <button class="btn btn-dark" type="submit">Crear</button>

 </form>

 <img text-center src={{asset('crear.png')}} alt="" width="350" height="250">
 <br>
 <br>


@endsection


{{--
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cursos</title>

</head>
<body>
    <div class="container">
        <br>
    <h2>Aqui puedes crear un nuevo curso</h2>
    <div class="form-group">
        <label for="nombre">Nombre del curso </label>
        <input id="nombre" class="form-control" type="text" name="nombre">
    </div>
    <div class="form-group">
        <label for="descripcion-">Descripción</label>
        <input id="descripcion" class="form-control" type="text" name="descripcion">
    </div>
    <div class="form-group">
        <label for="duración">Duración</label>
        <input id="duración" class="form-control" type="text" name="duracion">
    </div>
    <button class="btn btn-dark" type="submit">Crear</button>
    </div>
</body>
</html>
--}}
