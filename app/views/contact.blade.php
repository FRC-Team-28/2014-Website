@extends('templates.default')

@section('title')
Contact
@stop

@section('content')

@if(null !== Session::get('success'))
  @if(Session::get('success'))
  <div class="uk-grid">
    <div class="uk-alert uk-alert-success uk-width-2-3">Your email has been sent successfully! We'll get to it as soon as possible!</div>
  </div>
  @else
  <div class="uk-grid">
    <div class="uk-alert uk-alert-danger uk-width-4-5">Your email has not been sent. The red boxes below contain errors that must be fixed before the email can be sent.</div>
  </div>
  @endif
@endif
{{ Form::open(array('url' => 'contact-us', 'method' => 'POST', 'class' => 'uk-form'))}}
  <fieldset>
    <legend style="width: 150px">Get In Touch</legend>
    
    <div class="uk-grid">
      <div class="uk-form-row uk-form-icon uk-width-1-4">
        <i class="uk-icon-user"></i>
        <input type="text" placeholder="Full Name" value="{{ Input::old('name') }}" name="name"
        class="uk-width-1-1 @if(!empty($errors->first('name'))) uk-form-danger @endif">
      </div>     
    </div>

    <br />
    <div class="uk-grid">
      <div class="uk-form-row uk-form-icon uk-width-1-3">
        <i class="uk-icon-envelope"></i>
        <input type="text" placeholder="Email Address" value="{{ Input::old('email') }}" name="email"
        class="uk-width-1-1 @if(!empty($errors->first('email'))) uk-form-danger @endif">
      </div>     
    </div>

    <br />

    <div class="uk-grid">
      <div class="uk-form-row uk-form-icon uk-width-1-3">
        <i class="uk-icon-edit"></i>
        <input type="text" placeholder="Email Subject" value="{{ Input::old('subject') }}" name="subject"
        class="uk-width-1-1 @if(!empty($errors->first('subject'))) uk-form-danger @endif">
      </div>     
    </div>

    <br />

    <div class="uk-form-row">
        <textarea cols="80" rows="20" class="@if(!empty($errors->first('body'))) uk-form-danger @endif"name="body" placeholder="Enter Message Here">{{ Input::old('body') }}</textarea>
    </div>

    <br />

    @if(!empty($errors->first('recaptcha_response_field')))
    <div class="uk-alert uk-alert-danger">The captcha below was incorrect. Please try again.</div>
    @endif

    {{ Form::captcha(array('theme' => 'white')) }}

    <br />

    <button class="uk-button" type="submit">Send Email</button>
  </fieldset>
{{ Form::close() }}

<?php

  if(isset($input)) {
    var_dump($input);
  }
?>
@stop


