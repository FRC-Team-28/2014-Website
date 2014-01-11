@extends('templates.default')

@section('title')
Contact
@stop

@section('content')
{{ Form::open(array('url' => 'contact-us', 'method' => 'POST', 'class' => 'uk-form'))}}
  <fieldset>
    <legend style="width: 150px">Get In Touch</legend>
    <div class="uk-grid">
      <div class="uk-form-row uk-form-icon uk-width-1-3">
        <i class="uk-icon-envelope"></i>
        <input type="text" placeholder="Email Address" name="email" class="uk-width-1-1">
      </div>
    </div>

    <br />

    <div class="uk-form-row">
        <textarea cols="80" rows="20" name="message" placeholder="Enter Message Here"></textarea>
    </div>

    <br />

    <button class="uk-button" type="submit">Submit</button>
  </fieldset>
{{ Form::close() }}

<?php

  if(isset($input)) {
    var_dump($input);
  }
?>
@stop


