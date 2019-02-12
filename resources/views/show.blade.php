@extends('layouts.master')
@section('content')
<div  class="container mb-4 mt-4">
	<div class="row"> 
		<div class="col-md-12 text-right">
			<a href="{{url('/blog')}}" class="btn btn-post">return</a>
		</div>
	</div>
</div>
<div  class="container">
	<div class="row"> 
		<div class="col-md-12">
		   <img src="{{asset('storage/'.$post->image)}}" class="img-fluid img-thumbnail"/>
             <h2 class="post_title">{{$post->title}}</h2>
		    <div class="post_body">
		    	{!!$post->body!!}
		    </div>
		</div>
	</div>
</div>


@endsection