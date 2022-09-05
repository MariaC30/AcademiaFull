@extends('layouts.app')

@section('titulo', 'Editar Estudiante')

@section('contenido')
    <form action="/estudiante/{{$alumno->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <br>
        <h2>Aquí puedes editar la información del Estudiante</h2>
        <div class="form-group">
            <label for="tipoDocumento">Editar tipo de documento</label>
            <input id="tipoDocumento" class="form-control" type="text" name="tipoDocumento" value="{{$alumno->tipoDocumento}}">
        </div>
        <div class="form-group">
            <label for="numeroDocumento">Editar el número del documento</label>
            <input id="numeroDocumento" class="form-control" type="text" name="numeroDocumento" value="{{$alumno->numeroDocumento}}">
        </div>
        <div class="form-group">
            <label for="documentoIdentidad">Editar el cargue documento Identidad</label>
            <input id="documentoIdentidad" class="form-control" type="text" name="documentoIdentidad" value="{{$alumno->documentoIdentidad}}">
        </div>
        <div class="form-group">
            <label for="fechaExp">Editar fecha de expedicion</label>
            <input id="fechaExp" class="form-control" type="date" name="fechaExp" value="{{$alumno->fechaExp}}">
        </div>
        <div class="form-group">
            <label for="nombres">Editar nombres del estudiante</label>
            <input id="nombres" class="form-control" type="text" name="nombres" value="{{$alumno->nombres}}">
        </div>
        <div class="form-group">
            <label for="primerApellido">Editar el primer Apellido del estudiante</label>
            <input id="primerApellido" class="form-control" type="text" name="primerApellido" value="{{$alumno->primerApellido}}">
        </div>
        <div class="form-group">
            <label for="segundoApellido">Editar el segundo Apellido del estudiante</label>
            <input id="segundoApellido" class="form-control" type="text" name="segundoApellido" value="{{$alumno->segundoApellido}}">
        </div>
        <div class="form-group">
            <label for="genero">Editar genero del estudiante</label>
            <input id="genero" class="form-control" type="text" name="genero" value="{{$alumno->genero}}">
        </div>
        <div class="form-group">
            <label for="idMunicipioNa">Editar ID Municipio Nacimiento</label>
            <input id="idMunicipioNa" class="form-control" type="text" name="idMunicipioNa" value="{{$alumno->idMunicipioNa}}">
        </div>
        <div class="form-group">
            <label for="idCursos">Editar ID Cursos</label>
            <input id="idCursos" class="form-control" type="text" name="idCursos" value="{{$alumno->idCursos}}">
        </div>
        <div class="form-group">
            <label for="estratoSocial">Editar Estrato Social Estudiante</label>
            <input id="estratoSocial" class="form-control" type="text" name="estratoSocial" value="{{$alumno->estratoSocial}}">
        </div>

@endsection



