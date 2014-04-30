@extends('site.templates.default')

@section('title')
{{ $doc->title }}
@stop

@section('content')
<!-- blog entries -->
<h1>{{$doc->link()}}</h1>
<p class="lead">by {{$author->first_name. " ".$author->surname }}<a href="index.html"></a></p>
<p><span class="glyphicon glyphicon-time"></span> Posted on {{$doc->date}}</p>
<hr>
<p>{{$doc->getHtml('article.content')}}</p>
@stop


