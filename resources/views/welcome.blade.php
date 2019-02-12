@extends('layouts.master')
@section('content')
<div class="slider">
<div id="main" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <h3 class="wow fadeInDown" data-wow-duration="5s">L’association APE Safi<br>opère dans le domaine de la protection et la sensibilisation<br> aux questions de l’environnement depuis 2004</h3>
  	<div class="overlay"></div>
    <div class="carousel-item carousel-one active">
    </div>
    <div class="carousel-item carousel-tow">
    </div>
    <div class="carousel-item carousel-three">
    </div>
  </div>
  <ol class="carousel-indicators">
     <li data-target="#main" data-slide-to="0" class="active"></li>
     <li data-target="#main" data-slide-to="1"></li>
     <li data-target="#main" data-slide-to="2"></li>
  </ol>
</div>
</div>
<div class="objectif mt-2 mb-4">
  <div class="clearfix"></div>
  <h1 class="text-center wow shake" data-wow-duration="5s"><span class="badge badge-pill badge-success">Nos Objectifs</span></h1>
  <div class="container "> 
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('design/image/lamp.jpeg')}}" class="img-fluid img-thumbnail h-550 wow bounceIn"  data-wow-duration="5s"  data-wow-delay="1s" data-wow-offset="100">
        </div>
        <div class="col-md-6">
           <p class="wow fadeInRight" data-wow-duration="5s"  data-wow-delay="1s" data-wow-offset="100">
                  {!!setting('home.Objectifs')!!}
           </p>
        </div>
      </div>
  </div>
</div>
<div class="project mt-4 mb-4">
  <h2 class="text-center wow shake" data-wow-duration="5s"><span class="badge badge-pill badge-success">Projet Jardin École</span></h2>
  <div class="container "> 
      <div class="row">
        <div class="col-md-6">
          <p class="wow fadeInLeft"  data-wow-duration="5s"  data-wow-delay="1s" data-wow-offset="100">
            {!!setting('home.jardin')!!}
          </p>
        </div>
        <div class="col-md-6">
           <img src="{{asset('design/image/project.jpg')}}" class="img-fluid img-thumbnail h-550 wow bounceIn" data-wow-duration="5s"  data-wow-delay="1s" data-wow-offset="100">
       </div>
      </div>
  </div>
</div>

<div class="etb mt-4 mb-4">
  <h1 class="text-center"><span class="badge badge-pill badge-success">bénéficiaire</span></h1>
  <div class="container">
     <div class="row">
       <div class="col-md col-sm-2">
       <div class="main-container mb-2">
          <div class="thecard">
              <div class="thefronta">
                   <h3>EL BAHIA SAFI</h3>
              </div>
              <div class="thebacka">
                <span>ecole primaire<br>adresse:Quaryier kaouki<br>safi</span>
              </div>
          </div>
       </div>
       <div class="clearfix"></div>
       </div> 
       <div class="col-md col-sm-2">
              <div class="main-container mb-2">
          <div class="thecard">
              <div class="thefrontb">
               <h3>FKIH SERGHINI</h3>
              </div>
              <div class="thebackb">
               <span>ecole primaire <br>adresse:zaouia hay amouni 2<br> safi</span>
              </div>
          </div>
            </div>
            <div class="clearfix"></div>
       </div>
       <div class="col-md col-sm-2">
                     <div class="main-container mb-2">
          <div class="thecard ">
              <div class="thefrontc">
                <h3>IBN KHALDOUN</h3>
              </div>
              <div class="thebackc">
              <span class="text-center">lycée qualifiant<br>adresse:route dar si aissa commune<br>asfi</span>
              </div>
          </div>
             </div>
             <div class="clearfix"></div>
       </div>
     </div>
  </div>
</div>

<div class="contact">
  <div class="container">
     <div class="row mt-4">
       <div class="col-md-6 text-left">
         <h3>parler avec notre équipe</h3> 
       </div>
       <div class="col-md-6 text-right">
         <a href="{{url('/contact')}}" class="wow bounceIn" data-wow-duration="1s" data-wow-iteration="555">contact us</a>
       </div>
     </div>
  </div>
</div>

@endsection


