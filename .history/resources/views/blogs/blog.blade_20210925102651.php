<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{$post->id}}" >
            {{$post->title}}</h2>
        </a>
      
    <p class="blog-post-meta">{{$blog -> created_at -> toFormattedDateString()}} </p>

    {{$blog->body}}

  </div><!-- /.blog-post -->