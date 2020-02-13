@extends('layouts.master')
@section('title')
Ingresar al Sistema
@endsection
@section('content')
<div class="container mt-5 clasePerfilMargenSuperior rounded   shadow">
<h1 class="">Marcas para mascotas</h1>


  <p class="mb-0 text-justify alert alert-light">En Mascoteros puedes encontrar una gran variedad de productos para la alimentación
 y cuidado de tu mascota. Contamos con las mejores marcas
  para perros, gatos, pájaros, roedores, peces, reptiles y caballos. </p>

  <img src="img/port-1.jpg" class="img-fluid personalizado" alt="Responsive image">
  <section class="cta aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left">
                <div class="content aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                    <h2>GIVING BACK PROJECT</h2>
                    <p>With every product you purchase, Rocco's Bites helps provide food to dogs in need</p>
                </div>
                <div class="subscribe-btn aos-init aos-animate" data-aos="fade-left" data-aos-delay="400" data-aos-offset="0">
                    <a href="#" class="btn btn-primary">TAKE A PART</a>
                </div>
            </div>
        </div>
    </section>
  <div class="list-group">

  <a href="#" class="list-group-item list-group-item-action badge-primary bg-primary shadow-sm rounded"><h2>Listado de marcas</h2></a>
  @foreach($objeto_marcas as $marcas)


      <a href="{{route('producto.catalogo',['id_marca' => $marcas->id_marca])}}" class="list-group-item list-group-item-action " data-aos="flip-up">{{$marcas->nombre}}</a>






@endforeach


</div>
</div>
@endsection