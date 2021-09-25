@extends('layouts.master')

@section('content')

<div class="col-md-8 blog-main">


<h1> {{$item -> title}}</h1>

{{$item -> body}}
<br/>
<div class="red-text">
    {{$item -> important}}
</div>
<br/>
<img width="40%" height="260" src="/img/{{$item->id}}.jpg" alt="">

</div>
@endsection