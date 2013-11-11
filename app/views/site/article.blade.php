@extends('site.templates.default')

@section('title')

@stop

@section('content')
<!-- blog entries -->
<h1>{{$doc->link()}}</h1>
<p class="lead">by {{$doc->author}}<a href="index.html"></a></p>
<p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
<hr>
<hr>
<p></p>




<!-- pager -->
<ul class="pager">
    <li class="previous"><a href="#">&larr; Older</a></li>
    <li class="next"><a href="#">Newer &rarr;</a></li>
</ul>
@stop


