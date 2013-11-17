@extends('layouts.login')

@section('content')

@if (Session::has('flash_error'))
  <div class="alert alert-danger" >{{ Session::get('flash_error') }}</div>
@endif


{{ Form::open(array('url'=>'login', 'method'=>'post','class'=>'form-signin')) }}

	<h2 class="form-signin-heading text-center">Authentication</h2>
	
	{{ Form::text('username',null, array('class'=>'form-control','placeholder'=>'Email address')) }}
	{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}

    <label class="checkbox">
		{{ Form::checkbox('rememberme','1') }} Remember me
    </label>

	{{ Form::submit('Sign in', array('class'=>'btn btn-lg btn-primary btn-block')) }}

{{ Form::close()  }}

@stop



      

    