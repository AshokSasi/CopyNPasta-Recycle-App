@extends('layouts.master')

@section('content')

    
      
        <div class="col-md-8 blog-main">
          <a class="btn btn-outline-primary" href="/posts/create">Create Post</a>
          <br/>
          
          @foreach ($posts as $post)

             @include('posts.post')

          @endforeach
          
          
          <nav class="blog-pagination">
            
          </nav>

        </div><!-- /.blog-main -->



      <!-- /.row -->

   <!-- /.container -->

   

@endsection