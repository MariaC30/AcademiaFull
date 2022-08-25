@extends('layouts.app')

@section('titulo', 'Añadido')

@section('contenido')
    <div class="text-center">
        <div class="alert alert-danger" role="alert">
            El docente ha sido Agregado con exito...
        </div>
        <a href="/docente" class="m-5 btn btn-primary">Volver</a>
    </div>
@endsection
