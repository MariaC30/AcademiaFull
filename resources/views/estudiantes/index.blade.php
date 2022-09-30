@extends('layouts.app')
@section('titulo','Estudiantes')

@section('contenido')

    <h2>Listado de Estudiantes</h2>
    <div class="row">
        @foreach ($alumno as $item)
            <div class="col-sm">
                <div class="card w-50" >
                    <img style="height: 150px " class="card-img-top" src="{{Storage::url($item->FotoPerfil)}}" alt="FotoPerfil">
                    <div class="card-body">
                        <h4 class="card-title">{{$item->nombres}} {{$item->primerApellido}}</h4>
                        <p class="card-text">Documento: {{$item->numeroDocumento}}</p>
                        <a href="/estudiantes/{{$item->Estudiante}}" class="btn btn-primary">Ver Detalle</a>
                    </div>
                </div>
            </div>{{--cierre de col--}}
        @endforeach
    </div> {{--cierro el row--}}
    <br>
    <br>
    <a href="/estudiantes/create" class="btn btn-primary">Agregar Estudiante</a>
@endsection
