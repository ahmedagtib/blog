@extends('layouts.master')
@section('content')
<div class="img-contact">
	<img src="{{asset('design/image/blog.jpeg')}}" width="100%" height="400"/>
</div>
<div class="blog">
<div class="container">
	<div class="row">
		 @foreach($posts as $post)
        <div class="col-md-4 mb-2 mt-4">
           <div class="card mb-2 h-100">
               <img src="{{asset('/storage/'.$post->image)}}" class="card-img-top" height="300">
            <div class="card-body">
               <h4 class="card-title color_card_title">{{$post->title}}</h4>
               <p class="card-text color_card_body">{{$post->excerpt}}</p>
            </div>
            <div class="card-link text-center mb-2">
                <a href="{{url('/post/'.$post->slug)}}" class="btn btn-danger">more</a>
            </div>
         </div>
    </div>
    @endforeach 
</div>
</div>

<div class="container">
	<div class="d-flex justify-content-center">
		{{$posts->links()}}
	</div>
</div>
</div>

@endsection