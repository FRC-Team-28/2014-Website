@extends('templates.default')

@section('title')
Blog
@stop

@section('content')
@foreach($docs as $doc)
  <?php $author = $doc->author() ?>  
  <!-- blog entries -->
  <article class="uk-article">
    <h1 class="hk-article-title">{{$doc->link()}}</h1>
  <p class="hk-article-meta">Written by {{$author->first_name. " ".$author->surname }} on {{ $doc->date }}
    <ul class="uk-subnav uk-subnav-line">
      <?php foreach($doc->getTags() as $tag): ?>
        <li>{{ $tag }}</li>
      <?php endforeach; ?>
    </ul>
  </p>
  {{Str::words($doc->getText('article.content'), 80, '...')}} 
  <hr class="uk-article-divider">
@endforeach

 <?php $paginator = Paginator::make((array) $docs, count($docs), 5); ?>
@stop


