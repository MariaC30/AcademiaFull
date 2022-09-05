@extends('layouts.app')

@section('titulo', 'Detalle Estudiante')

@section('contenido')
<div class=" ">
<div class="m-auto ">
    <h1>Estudiante</h1>
    <img width="300" src="{{Storage::url($alumno->imagen)}}">
    <p class="card-text">Tipo Documento: {{$alumno->tipoDocumento}}</p>
    <p class="card-text">Numero Documento: {{$alumno->numeroDocumento}}</p>
    <p class="card-text">Carge Documento Id:{{$alumno->documentoIdentidad}}</p>
    <p class="card-text">Fecha Expediccion: {{$alumno->fechaExp}}</p>
    <p class="card-text">Nombre Estudiante: {{$alumno->nombres}}</p>
    <p class="card-text">Primer Apellido: {{$alumno->primerApellido}}</p>
    <p class="card-text">Segundo Apellido : {{$alumno->segundoApellido}}</p>
    <p class="card-text">Genero: {{$alumno->genero}}</p>
    <p class="card-text">ID Municipio Nacimiento: {{$alumno->idMunicipioNac}}</p>
    <p class="card-text">Estrato Social: {{$alumno->estratoSocial}}</p>

</div><br>

<a href="/estudiantes/{{$alumno->id}}/edit" class="btn btn-info">Editar Estudiante</a>

<form action="/estudiantes/{{$alumno->id}}" method="post">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger"> Eliminar </button>
</form>
</div>
@endsection
