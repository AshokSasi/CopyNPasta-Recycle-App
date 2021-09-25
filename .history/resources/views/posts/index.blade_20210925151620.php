@extends('layouts.master')

@section('content')

    
      
        <div class="col-md-8 blog-main">
          
          <div>

          </div>
          <button class="btn btn-primary" action="/posts/create">Create Post</button>
          
          <br/>
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