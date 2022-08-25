@extends('layouts.app')

@section('titulo', 'Editar Docente')

@section('contenido')
    <form action="/docentes/{{$docentico->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <br>
            <h2>Aquí puedes editar la información del docente</h2>
            <div class="form-group">
                <label for="nombre">Editar nombre del docente</label>
                <input id="nombre" class="form-control" type="text" name="nombre" value="{{$docentico->nombre}}">
            </div>
            <div class="form-group">
                <label for="descripcion">Editar los apellidos del docente</label>
                <input id="descripcion" class="form-control" type="text" name="descripcion" value="{{$docentico->apellidos}}">
            </div>
            <div class="form-group">
                <label for="duracion">Editar el titulo universitario</label>
                <input id="duracion" class="form-control" type="text" name="duracion" value="{{$docentico->tituloU}}">
            </div>
            <div class="form-group">
                <label for="duracion">Editar la edad</label>
                <input id="duracion" class="form-control" type="text" name="duracion" value="{{$docentico->edad}}">
            </div>
            <div class="form-group">
                <label for="duracion">Editar la fecha de contratación</label>
                <input id="duracion" class="form-control" type="text" name="duracion" value="{{$docentico->fecha}}">
            </div>
            <div class="form-group">
                <label for="imagen">Cargue una nueva foto</label>
                <br>
                <img width="400" src="{{Storage::url($docentico->imagen)}}" alt="">
                <br>
                <br>
                <input id="imagen" type="file" name="imagen">
            </div>
            <div class="form-group">
                <label for="documento">Cargue un nuevo documento</label>
                <br>
                <iframe width="400" src="{{Storage::url($docentico->Document)}}" alt=""></iframe>
                <br>
                <br>
                <input id="documento" type="file" name="documento">
            </div>
            <button  class="btn btn-info"   type="submit">Actualizar</button>

        </div>
    </form>
@endsection
