
  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand wow jello" href="{{url('/')}}"   data-wow-duration="2s" data-wow-delay=".5s" data-wow-iteration="555">
    <img src="{{asset('design/image/ape.png')}}" width="50"  height="50">
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/propos')}}">A propos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/blog')}}">blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/contact')}}">contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>