@extends('layouts.master')
@section('content')
<div class="img-prpo">
	<img src="{{asset('design/image/earth.jpg')}}" width="100%" height="400" />
</div>
<div class="content_prop">
	<div class="container mb-4">
	<h1 class="text-center">L’association APE Safi</h1>
	<div class="row">
		 <div class="col-md-6">
		 	 <img src="{{asset('design/image/cover.png')}}" class="img-fluid img-thumbnail h-550">
		 </div>
		 <div class="col-md-6">
		 	<p class="text_prop wow fadeInRight"  data-wow-duration="5s" >
		 		{!!setting('prop-ape.propApe')!!}
		 	</p>
		 </div>
	</div>
</div>
</div>
<div class="gallery">
	<div class="container">
		<div class="text-center">
		<h2 class="wow bounceIn" data-wow-duration="5s">Galerie de photos</h2>
		<p class="wow bounceIn"data-wow-duration="5s">Notre projet intervient dans la sensibilisation d’un jeune public, constitué Essentiellement des élèves des écoles publiques de l’académie de Marrakech Safi, et ses environs. Cette démarche se veut être liée à l’éducation à l’environnement et de créer des liens entre les jeunes, et leur environnement naturel local.</p>
	    </div>
	</div>
	   <div class="shuffle-img">
		    <div class="row">
		            <div class="col-md">
			          <img src="{{asset('design/image/m1.jpg')}}">
		            </div>
		            <div class="col-md">
			         <img src="{{asset('design/image/m2.jpg')}}">
		            </div>
		             <div class="col-md">
			          <img src="{{asset('design/image/m3.jpg')}}">
		             </div>
		            <div class="col-md">
			         <img src="{{asset('design/image/m4.jpg')}}" >
		            </div>
		    </div>  
		    <div class="row">
		              <div class="col-md">
			              <img src="{{asset('design/image/m5.jpg')}}" >
		              </div>
		             <div class="col-md">
			          <img src="{{asset('design/image/m6.jpg')}}" >
		             </div>
		             <div class="col-md">
			          <img src="{{asset('design/image/project.jpg')}}" >
		             </div>
		            <div class="col-md">
			         <img src="{{asset('design/image/3.jpg')}}" >
		            </div>
		   </div>  
		 </div>  
</div>


@endsection