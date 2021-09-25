@extends('layouts.master')

@section('content')

<div class="col-md-8 blog-main">


<h1> {{$post -> title}}</h1>

{{$post -> body}}

</div>
@endsection