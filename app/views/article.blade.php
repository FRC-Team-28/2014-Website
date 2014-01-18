@extends('templates.default')

@section('title')
{{ $doc->title }}
@stop

@section('content')
<article class="uk-article">

  <h1 class="hk-article-title">{{$doc->link()}}</h1>

  <p class="hk-article-meta">Written by {{$author->first_name. " ".$author->surname }} on {{ $doc->date }}</p>
    
    <ul class="uk-subnav uk-subnav-line">
      <?php foreach($doc->getTags() as $tag): ?>
        <li>{{ $tag }}</li>
      <?php endforeach; ?>
    </ul>

  <p>{{$doc->getText('article.content')}}</p>

</article>
@stop


