@extends('layouts.master')

@section('content')

    
      
        <div class="col-md-8 blog-main">
          
        
          <form action="">
            <button class="btn btn-primary" >Create Post</button>
          </form>
         
          
      
          
          @foreach ($posts as $post)

             @include('posts.post')

          @endforeach
          
          
          <nav class="blog-pagination">
            
          </nav>

        </div><!-- /.blog-main -->



      <!-- /.row -->

   <!-- /.container -->

   

@endsection