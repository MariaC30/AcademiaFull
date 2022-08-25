@extends('layouts.app')

@section('titulo', 'crear curso')

@section('contenido')

 <form action="/docente" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- @if($errors->any())
        @foreach ($errors->all() as $alerta)
        <div class="alert alert-danger">
            <ul>
                <li>{{$alerta}}</li>
            </ul>
        </div> --}}

        {{--@endforeach
    @endif--}}

    <br>
    <div class="container">
        <h1>Agregar Docente</h1>

        <div class="form-group">
            <label for="nombre">Nombres</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input id="apellidos" class="form-control" type="text" name="apellidos">
                <div class="form-group">
                    <label for="tituloU">Titulo Universitario</label>
                    <input id="tituloU" class="form-control" type="text" name="tituloU">
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input id="edad" class="form-control" type="text" name="edad">
                        <div class="form-group">
                            <label for="fecha">Fecha de contrato</label>
                            <input id="fecha" class="form-control" type="date" name="fecha">
                            <div class="form-group">
                                <label for="imagen">Foto</label>
                                <input id="imagen" class="form-control" type="file" name="imagen">
                                <div class="form-group">
                                    <label for="Document">Documento identidad</label>
                                    <input id="Document" class="form-control" type="file" name="Document">

                                    <br>
                                    <br>
                                    <button class="btn btn-dark" type="submit">Agregar</button>

 <br>
 <br>

@endsection

