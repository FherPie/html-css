@extends('layouts.master') @section('title') Nosotros @endsection
@section('styles')
<link rel="stylesheet" href="{{ URL::to('src/css/nosotrosCss.css')}}"/>
@endsection
@section('content')


<main class="mt-5" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


      <div class="jumbotron text-center">
          <h1>DOGSI </h1> 
          <p>Nos especializamos en el día de día de sus Mascotas</p> 
          <form>
            <div class="input-group">
              <input type="email" class="form-control" size="50" placeholder="Dirección de Email" style="height: 50px;" required>
              <div class="input-group-btn botonSus" >
                <button type="button" class="btn btn-danger">Suscribirme</button>
              </div>
            </div>
          </form>
        </div>

        <!-- Container (About Section) -->
<div id="about" class="container-fluidx">
    <div class="row">
      <div class="col-sm-8">
        <h2>Acerca de Dogsi</h2><br>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <br><button class="btn btn-default btn-lg">Get in Touch</button>
      </div>
      <div class="col-sm-4">
          <i class="fa fa-signal logo" aria-hidden="true"></i>
      </div>
    </div>
  </div>
  
  <div class="container-fluidx bg-grey">
    <div class="row">
      <div class="col-sm-4">
          <i class="fa fa-globe  logo slideanim" aria-hidden="true"></i>

        <!-- <span class="glyphicon glyphicon-globe "></span> -->
      </div>
      <div class="col-sm-8">
        <h2>Nuestros Valores</h2><br>
        <h4><strong>MISION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
        <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
  </div>


  <!-- Container (Services Section) -->
<div id="services" class="container-fluidx text-center">
    <h2>SERVICIOS</h2>
    <h4>Qué ofrecemos!</h4>
    <br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-off logo-small"></span>
        <h4>Peluquería Canina</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-heart logo-small"></span>
        <h4>Esterilizaciones</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-lock logo-small"></span>
        <h4>Vacunas</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
    </div>
    <br><br>
    <div class="row slideanim">
      <div class="col-sm-12">
        <span class="glyphicon glyphicon-leaf logo-small"></span>
        <h4>Profilaxis</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <!--div class="col-sm-6">
        <span class="glyphicon glyphicon-certificate logo-small"></span>
        <h4>Transporte</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div-->
      <!--div class="col-sm-4">
        <span class="glyphicon glyphicon-wrench logo-small"></span>
        <h4 style="color:#303030;">HARD WORK</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div-->
    </div>
  </div>

  
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluidx bg-grey">
    <h2 class="text-center">CONTACTOS</h2>
    <div class="row">
      <div class="col-sm-12 text-center">
        <p>Nos Contactaremos contigo tan pronto sea posible!</p>
        <p>
            <i class="fas fa-home  mr-3"></i> Francisco Matiz y Manuel Ruales</p>
        <p>
            <i class="fas fa-envelope mr-3"></i>elizpa_4@hotmail.com</p>
            <p><i class="fas fa-building fa-1x mr-2 grey-text"></i>De Lunes a Sábado, 9:00-21:00</p>
        <p>
            <i class="fas fa-phone mr-3"></i> +09 988 49028</p>
        <p>

        <a href="https://api.whatsapp.com/send?phone=593998849028&text=Hola DOGSI!%20Necesito%20preguntar%20acerca%20de:" 
target="_blank"
class="btn btn-sucess"><img src="{{asset('./img/wthasp.jpg')}}" with='72' height='72'/></a>
</p>
      </div>
    </div>
  </div>


  </main>
@endsection

@section('scripts')
<script type="text/javascript"  src="{{ URL::to('js/nosotrosJS.js')}}"></script>
@endsection