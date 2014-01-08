@extends('site.templates.default')

@section('title')

@stop

@section('content')
@foreach($docs as $doc)
  <?php $author = $doc->author() ?>  
  <!-- blog entries -->
  <h2>{{$doc->link()}}</h1>
  <?php foreach($doc->getTags() as $tag): ?>
    {{ $tag }}
  <?php endforeach; ?>
  <p>by {{$author->first_name. " ".$author->surname }}<a href="index.html"></a></p>
  <hr>
  <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
  <hr>
  <p>{{Str::words($doc->getHtml('article.content'), 60, '...')}}  </p>
  
  <hr>
@endforeach

  <!-- pager -->
  <ul class="pager">
    <li class="previous"><a href="#">&larr; Older</a></li>
    <li class="next"><a href="#">Newer &rarr;</a></li>
  </ul>
@stop


