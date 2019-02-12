@extends('layouts.master')
@section('content')
<div class="img-contact">
	<img src="{{asset('design/image/contact.jpeg')}}" width="100%" height="400" />
</div>
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has("success"))
  <div class="alert alert-success">
  	{{Session::get("success")}}
  </div>
@endif
</div>
<div class="contact-form">
<div class="container">
	<h1 class="text-center">contact nous</h1>
	<div class="row">
		<div class="col-md-6">
			{!!setting('contact.map')!!}
		</div>
		<div class="col-md-6">
			<form class="form mb-4 wow fadeInRight" action="{{url('/contact')}}" method="Post"  data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="80">
				@csrf
				<div class="form-group">
				  <label class="label-control">object :</label>	
				  <input type="text"  class="form-control" name="object"> 
				</div>
				<div class="form-group">
				  <label class="label-control">email :</label>	
				  <input type="email" class="form-control" name="email"> 
				</div>
				<div class="form-group">
				  <label class="label-control">Message :</label>	
				  <textarea name="body" class="form-control"></textarea>
				</div>
				<input type="submit" value="envoyer" class="btn btn-success">
			</form>
		</div>
	</div>
</div>	
</div>



@endsection