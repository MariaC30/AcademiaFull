@extends('layouts.app')
@section('titulo','Estudiantes')
@section('contenido')

<h2>Listado de Estudiantes</h2>

<div class="row">
    @foreach ($alumno as $item)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img style="height: 150px " class="card-img-top" src="{{Storage::url($item->imagen)}}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">{{$item->nombre}} {{$item->apellidos}}</h4>
                <p class="card-text">Titulo Estudiantil: {{$item->tituloE}}</p>
                <a href="/estudiantes/{{$item->id}}" class="btn btn-primary">Ver Detalle</a>
            </div>
        </div>
    </div>{{--cierre de col--}}


    @endforeach
    </div> {{--cierro el row--}}
    <br>
    <br>
    <a href="/estudiantes/create" class="btn btn-primary">Agregar Estudiante</a>


