@extends('layouts.app')

@section('titulo', 'Actualizado')

@section('contenido')
    <div class="text-center">
        <div class="alert alert-danger" role="alert">
            El Estudiante  ha sido Actualizado  con exito...
        </div>
        <a href="/estudiante" class="m-5 btn btn-primary">Volver</a>
    </div>
@endsection
