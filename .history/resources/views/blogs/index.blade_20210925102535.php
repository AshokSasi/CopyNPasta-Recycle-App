@extends('layouts.master')

@section('content')

    
      
        <div class="col-md-8 blog-main">
          
          @foreach ($blogs as $blog)

             @include('blogs.post')

          @endforeach
          
          
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->



      <!-- /.row -->

   <!-- /.container -->

   

@endsection