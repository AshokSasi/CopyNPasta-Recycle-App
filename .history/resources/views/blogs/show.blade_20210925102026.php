@extends('layouts.master')

@section('content')

<div class="col-md-8 blog-main">


    <h1> {{$blog -> title}}</h1>

    {{$blog -> body}}

    <hr/>

    <div class="comments">

        <ul class="list-group">

            @foreach ($post->comments as $comment)
            
            <li class="list-group-item">

                <strong>
                    {{$comment->created_at->diffForHumans()}}: &nbsp;
                </strong>

                {{$comment->body}}

            </li>

        @endforeach

        </ul>
        
    </div>

    {{--Section for adding comments--}}
    <hr/>
    <div class="card">
        <div class="card-block">
            
            <form method="POST" action="/posts/{{$post->id}}/comments">
                {{ csrf_field() }} <!--include this in all forms-->

                <div class="form-group p-3">

                    <textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>

                </div>

                <div class="form-group ml-3">

                    <button type="submit" class="btn btn-primary">Add Comment</button>

                </div>

            </form>

            <div class="form-group p-3">
                @include('layouts.errors')
            </div>
           

        </div>

    </div>

</div>

    

@endsection