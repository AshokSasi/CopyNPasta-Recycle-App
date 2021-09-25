<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/blogs/{{$blog->id}}" >
            {{$blog->title}}</h2>
        </a>
      
    <p class="blog-post-meta">{{$blog -> created_at -> toFormattedDateString()}} </p>

    {{$blog->body}}

  </div><!-- /.blog-post -->