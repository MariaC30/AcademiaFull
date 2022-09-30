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
                <select id="tipoDocumento" class="form-control" name="tipoDocumento">
                    <option value="CC">Cedula</option>
                    <option value="TI">Tarjeta de identidad</option>
                    <option value="PAS">Pasaporte</option>
                    <option value="REG">Registro civil</option>
                    <option value="CE">Cedula de extrangería</option>
                </select>
            </div>
            <div class="form-group">
                <label for="numeroDocumento">Numero Documento</label>
                <input id="numeroDocumento" class="form-control" type="text" name="numeroDocumento" >
            </div>
            <div class="form-group">
                <label for="documentoIdentidad">Cargue el Documento de Id</label>
                <br>
                <input id="documentoIdentidad" class="" type="file" name="documentoIdentidad" accept=".pdf" >
            </div>
            <div class="form-group">
                <label for="fechaExp">Fecha Expediccion</label>
                <input id="fechaExp" class="form-control" type="date" name="fechaExp" >
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
                    <select id="genero" class="form-control" name="genero" >
                        <option value="F">Femenino</option>
                        <option value="M">Masculino</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="imagen">Foto de Perfil</label>
                <br>
                <input id="imagen" class=" " type="file" name="FotoPerfil" accept="image/*">
            </div>
            <div class="form-group">
                <label for="idPaisNacim">Pais de nacimiento</label>
                <select class="form-control" name="idPaisNacim" id="idPaisNacim">
                     @foreach ($paises as $paisNac)
                        <option value="">{{$paisNac->nombrePais}}</option>
                    @endforeach
                </select>
            </div>
                <div class="form-group">
                    <label for="idDepNac">Departamento de nacimiento</label>
                    <select class="form-control" name="idDepNac" id="idDepNac">
                        @foreach ($departamentos as $dep)
                            <option value="">{{$dep->nombreDepartamento}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idMunicipioNac">Municipio Nacimiento</label>
                    <select class="form-control" name="idMunicipioNac" id="idMunicipioNac">
                        @foreach ($municipios as $mun)
                            <option value="{{$mun->idMunicipios}}">{{$mun->nombreMunicipio}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idCursos">Cursos</label>
                    <select class="form-control" name="idCursos" id="idCursos">
                        @foreach ($cursos as $cursito)
                            <option value="{{$cursito->id}}">{{$cursito->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idPaisExp">Pais de expedicion</label>
                    <select class="form-control" name="idPaisExp" id="idPaisExp">
                        @foreach ($paises as $paisNac)
                            <option value="{{$paisNac->paises}}">{{$paisNac->nombrePais}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idDepExp">Departamento de expedicion</label>
                    <select class="form-control" name="idDepExp" id="idDepExp">
                        @foreach ($departamentos as $dep)
                            <option value="">{{$dep->nombreDepartamento}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idMunicipiosExp">Municipio expedicion</label>
                    <select class="form-control" name="idMunicipiosExp" id="idMunicipiosExp">
                        @foreach ($municipios as $mun)
                            <option value="{{$mun->idMunicipios}}">{{$mun->nombreMunicipio}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="estratoSocial">Estrato Social</label>
                    <input id="estratoSocial" class="form-control" type="number" name="estratoSocial" min="1" max="6">
                </div>
                <br>
                <br>
                <button class="btn btn-dark" type="submit">Agregar</button>
            </div>
        </div>
    </div>
 <br>
 <br>

@endsection
--
