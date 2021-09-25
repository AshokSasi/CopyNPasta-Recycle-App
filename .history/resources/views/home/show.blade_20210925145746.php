@extends('layouts.master')

@section('content')

<div class="col-md-8 blog-main">


<h1> {{$item -> title}}</h1>

{{$item -> body}}

<div class="red-text">
    {{$item -> important}}
</div>


</div>
@endsection