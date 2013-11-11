@extends('site.templates.default')

@section('title')

@stop

@section('content')
@foreach($docs as $doc)
  <!-- blog entries -->
  <h1>{{$doc->link()}}</h1>
  <p class="lead">by <a href="index.html"></a></p>
  <hr>
  <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
  <hr>
  <img src="http://placehold.it/900x300" class="img-responsive">
  <hr>
  <p></p>
  <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

  <hr>
@endforeach

  <!-- pager -->
  <ul class="pager">
    <li class="previous"><a href="#">&larr; Older</a></li>
    <li class="next"><a href="#">Newer &rarr;</a></li>
  </ul>
@stop


