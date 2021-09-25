@extends('layouts.master')

@section('content')

    
      
        <div class="col-md-8 blog-main">
          
          <div class="mb-3 pl-5">
            <form action="/posts/create">
              <button type="submit" class="btn btn-primary" >Create Post</button>
            </form>
          </div>
          
         
          
      
          
          @foreach ($posts as $post)

             @include('posts.post')

          @endforeach
          
          
          <nav class="blog-pagination">
            
          </nav>

        </div><!-- /.blog-main -->



      <!-- /.row -->

   <!-- /.container -->

   

@endsection