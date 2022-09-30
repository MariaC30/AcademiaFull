@extends('layouts.app')

@section('titulo', 'Detalle Estudiante')

@section('contenido')
    <div class="row">
        <div class="m-auto ">
            <h1>Estudiante</h1>
            <img width='300' src="{{Storage::url($alumno->FotoPerfil)}}" alt="FotoPerfil">
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

        <a href="/estudiantes/{{$alumno->Estudiante}}/edit" class="btn btn-info">Editar Estudiante</a>
        <br>
        <br>
        <form action="/estudiantes/{{$alumno->Estudiante}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"> Eliminar </button>
        </form>
        <br>

        </div>
     </div>
@endsection



