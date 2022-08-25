@extends('layouts.app')

@section('titulo', 'Editar curso')

@section('contenido')

<form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <br>
    <h2>Formulario de edicion del curso</h2>
    <div class="form-group">
        <label for="nombre">Edita el nombre del curso </label>
        <input id="nombre" class="form-control" type="text" name="nombre" value="{{$cursito->nombre}}" >
    </div>
    <div class="form-group">
        <label for="descripcion-">Edita la Descripción</label>
        <input id="descripcion" class="form-control" type="text" name="descripcion" value="{{$cursito->descripcion}}">
    </div>
    <div class="form-group">
        <label for="duración">Edita la Duración</label>
        <input id="duración" class="form-control" type="text" name="duracion" value="{{$cursito->duración}}">

    </div>
    <br>
        <img height ="100" src="{{ Storage::url($cursito->imagen) }}"  alt="..." >
    <div class="form-group">
        <label for="imagen">Cargue la nueva imagen del curso</label>
        <br>
        <input id="imagen" class=" " type="file" name="imagen">
    </div>
    <button class="btn btn-success" type="submit">Actualizar</button>

 </form>
@endsection
