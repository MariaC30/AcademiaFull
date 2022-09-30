@extends('layouts.app')

@section('titulo', 'Detalle Docente')

@section('contenido')
<div class=" row">
    <div class="m-auto ">
        <h1>Docente</h1>
        <img width="300" src="{{Storage::url($docentico->imagen)}}">
        <p class="card-text">Nombres: {{$docentico->nombre}}</p>
        <p class="card-text">Apellidos: {{$docentico->apellidos}}</p>
        <p class="card-text">Titulo universitario: {{$docentico->tituloU}}</p>
        <p class="card-text">Edad: {{$docentico->edad}}</p>
        <p class="card-text">Fecha de contratacion: {{$docentico->fecha}}</p>
        <br>
        <p class="card-text">Documento de identidad:</p>
        <br>
        <iframe height="400" width="400" src="{{Storage::url($docentico->Document)}}"></iframe>

    <br>
    <a href="/docente/{{$docentico->id}}/edit" class="btn btn-info">Editar Docente</a>
    <br>
    <form action="/docente/{{$docentico->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"> Eliminar </button>
    </form>
    </div>
</div>
@endsection
