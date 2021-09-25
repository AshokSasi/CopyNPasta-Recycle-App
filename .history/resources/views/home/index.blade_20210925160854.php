@extends('layouts.master')

@section('content')

    
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>  
<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Welcome to H2R</h1>
        <p class="lead text-muted">Welcome to H2R! The website that guides you on how to recycle.
           Below you can find a list of items with their description and improtant notes on how to dispose of them. Have a look at our blog page as well to see how others are recycling.</p>
        <p>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @php ($count = 1)
        @foreach ($items as $item)
        
        <div class="col">
          <div class="card shadow-sm">
            <img width="100%" height="260" src="/img/{{$item->id}}.jpg" alt="">
            <div class="card-body">
              <h4 class="card-text"> <a href="/home/{{$item->id}}" >
                {{$item->title}}</h2>
              </a></h4>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        @if ($count >2)
        <div class="w-100"></div>
        <br/>
        @php ($count = 1)
        
        @else 
        @php ($count++)
        
        @endif
        
          @endforeach
     

          
      </div>
    </div>
  </div>

</main>
   

@endsection