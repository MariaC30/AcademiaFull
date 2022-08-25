@extends('layouts.app')

@section('titulo', 'Lista Cursos')

@section('contenido')
<h2> Listado Cursos </h2>
{{--foreach sirve para iterar arrays, Es decir permite ciclos en listas--}}
<div class="row">
    @foreach ($cursito as $item)

        <div class="col-sm"> {{--Se pone col-sm para que se adapte a dispositivos pequeños--}}
        {{--<p> {{$item}}</p>--}}
        <div class="card text-center m-3" style="width: 18rem;">
            <img style="height: 150%" src="{{ Storage::url($item->imagen) }}" class="card-img-top" alt="..." >
            <div class="card-body">
                <h5 class="card-title">{{$item->nombre}}</h5>
                {{-- <p class="card-text">{{$item->descripcion}}</p>
                <p class="card-text">{{$item->duración}}</p> --}}
                <a href="/cursos/{{$item->id}}" class="btn btn-primary">Ver detalle</a>
            </div>
        </div>
        </div> {{--cierro el col--}}


    @endforeach
</div> {{--cierro el row--}}

    {{--La doble llave sirve para interpolar: que es traer una variable de otro lnguaje al lenguaje que se esta
         usando actualmente --}}
@endsection
