@extends('layouts.app')

@section('titulo','Añadido')

@section('contenido')
<div clas="text-center">
    <div class="alert alert-danger" role="alert">
        El curso ha sido Agregado con Exito...
    </div>
    <a href="/cursos" class="m-5 btn btn-primary">Volver</a>
</div>
@endsection
