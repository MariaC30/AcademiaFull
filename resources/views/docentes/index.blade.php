@extends('layouts.app')

@section('titulo', 'Docentes')

@section('contenido')
<h2>Listado de docentes </h2>

<div class="row">
    @foreach ($docentico as $item)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img style="height: 150px " class="card-img-top" src="{{Storage::url($item->imagen)}}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">{{$item->nombre}} {{$item->apellidos}}</h4>
                <p class="card-text">Titulo Universitario: {{$item->tituloU}}</p>
                <a href="/docente/{{$item->id}}" class="btn btn-primary">Ver Detalle</a>
            </div>
        </div>
    </div>{{--cierre de col--}}
@endforeach
</div> {{--cierro el row--}}
<br>
<br>
<a href="/docente/create" class="btn btn-primary">Agregar Docente</a>

@endsection
