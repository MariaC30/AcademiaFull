@extends('layouts.app')
@section('titulo','Añadir Estudiante')
@section('contenido')

<form action="/estudiantes" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">

        <div class="col col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <h1>Agregar Estudiante</h1>
            </div>
        </div>
        <div class="form-group">
            <label for="tipoDocumento">Tipo Documento</label>
            <input id="tipoDocumento" class="form-control" type="text" name="tipoDocumento">
        </div>
        <div class="form-group">
            <label for="numeroDocumento">Numero Documento</label>
            <input id="numeroDocumento" class="form-control" type="text" name="numeroDocumento" >
        </div>
        <div class="form-group">
            <label for="documentoIdentidad">Carge el Documento de Id</label>
            <input id="documentoIdentidad" class="form-control" type="text" name="documentoIdentidad" >
        </div>
        <div class="form-group">
            <label for="fechaExp">Fecha Expediccion</label>
            <input id="fechaExp" class="form-control" type="text" name="fechaExp" >
        </div>
        <div class="form-group">
            <label for="nombres">Nombre Estudiante</label>
            <input id="nombres" class="form-control" type="text" name="nombres" >
        </div>
        <div class="form-group">
            <label for="primerApellido">Primer Apellido</label>
            <input id="primerApellido" class="form-control" type="text" name="primerApellido" >
        </div>
        <div class="form-group">
            <label for="segundoApellido">Segundo Apellido</label>
            <input id="segundoApellido" class="form-control" type="text" name="segundoApellido" >
            <div class="form-group">
                <label for="genero">Genero</label>
                <input id="genero" class="form-control" type="text" name="genero" >
            </div>
            <div class="form-group">
                <label for="idMunicipioNac">ID Municipio Nacimiento</label>
                <input id="idMunicipioNac" class="form-control" type="text" name="idMunicipioNac" >
            </div>
            <div class="form-group">
                <label for="idCursos">ID Cursos</label>
                <input id="idCursos" class="form-control" type="text" name="idCursos" >
            </div>
            <div class="form-group">
                <label for="estratoSocial">Estrato Social</label>
                <input id="estratoSocial" class="form-control" type="text" name="estratoSocial" >
            </div>
              <br>
              <br>
            <button class="btn btn-dark" type="submit">Agregar</button>
    

 <br>
 <br>

@endsection
