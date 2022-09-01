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
            <label for="fechaExp">Editar fecha de expedicion</label>
            <input id="fechaExp" class="form-control" type="date" name="fechaExp" value="{{$alumno->fechaExp}}">
        </div>
        <div class="form-group">
            <label for="nombres">Editar nombres del estudiante</label>
            <input id="nombres" class="form-control" type="text" name="nombres" value="{{$alumno->nombres}}">
        </div>
        <div class="form-group">
            <label for="primerApellido">Editar el primer nombre del estudiante</label>
            <input id="primerApellido" class="form-control" type="text" name="primerApellido" value="{{$alumno->primerApellido}}">
        </div>
        <div class="form-group">
            <label for="segundoApellido">Editar el segundo nombre del estudiante</label>
            <input id="segundoApellido" class="form-control" type="text" name="segundoApellido" value="{{$alumno->segundoApellido}}">
        </div>




