@extends('layouts.master')
@section('title')
Ingresar al Sistema
@endsection
@section('content')
<div class="container mt-5 clasePerfilMargenSuperior rounded bg-light">
<h1 class="">Marcas para mascotas</h1>


  <p class="mb-0 text-justify alert alert-light">En Mascoteros puedes encontrar una gran variedad de productos para la alimentación
 y cuidado de tu mascota. Contamos con las mejores marcas
  para perros, gatos, pájaros, roedores, peces, reptiles y caballos. </p>

  <img src="img/port-1.jpg" class="img-fluid personalizado" alt="Responsive image">
  
  <div class="list-group">

  <a href="#" class="list-group-item list-group-item-action badge-primary"><h2>Listado de marcas</h2></a>
  @foreach($objeto_marcas as $marcas)


  <a href="" class="list-group-item list-group-item-action ">{{$marcas->nombre}}</a>

@endforeach


</div>
</div>
@endsection