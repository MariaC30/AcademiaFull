@extends('layouts.app')

@section('titulo', 'Sobre nosotros')

@section('contenido')

<h1> Academia DeTodito</h1>
<h2>Expande tus conocimientos como siempre has querido y certificate en ello</h2>
    <br>
      <br>
      <img src={{asset('academias-virutales.jpg')}} alt="" width="350" height="350">
      <br>
      <br>
<h3>Mas de 10 años de trabajo en educación en STEM nos colocan en la vanguardia a nivel de América Latina.
     El programa Pequeños Científicos nace en 1998 cuando las primeras acciones se realizan en asociación con
      el Liceo Francés Louis Pasteur de Bogotá, Colombia. A partir de 2018 el programa de Pequeños Científicos se
      integra a la gran iniciativa de la Academia Colombiana de Ciencias, denominada ACADEMIADETODITO.</h3>
      <br>
      <br>
<h1>Nuestros socios Académicos</h1>
<br>
<img src={{asset('images.jpg')}} alt="" width="350" height="350">
      <br>
      <h3>Varias Universidades han colaborado en red con la iniciativa, entre ellas la Universidad Nacional de Colombia, Universidad de los Andes,
         Universidad de Ibagué, ICESI, Universidad EIA, Universidad Tecnológica de Pereira.</h3>


@endsection
