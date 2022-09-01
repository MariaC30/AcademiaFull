@extends('layouts.app')
@section('titulo','Añadir Estudiante')
@section('contenido')

<form action="/estudiantes" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <h1>Agregar Estudiante</h1>
        <div class="form-group">
            <label
