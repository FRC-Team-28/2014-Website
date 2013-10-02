@extends('site.templates.default')

@section('title')
  {{ $data['title'] }}
@stop

@section('content')
  @foreach($data["articles"] as $article)
 		<h2>{{ $article->title}}</h2>
		<p>{{ $article->body }}</p>
	@endforeach
@stop


