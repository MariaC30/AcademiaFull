@extends('layouts.app')

@section('titulo', 'Detalle Estudiante')

@section('contenido')
<div class=" ">
<div class="m-auto ">
    <h1>Estudiante</h1>
    <img width="300" src="{{Storage::url($alumno->imagen)}}">

    .....falata completar...
</div><br>

<a href="/estudiantes/{{$alumno->id}}/edit" class="btn btn-info">Editar Estudiante</a>

<form action="/estudiantes/{{$alumno->id}}" method="post">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger"> Eliminar </button>
</form>
</div>
@endsection
