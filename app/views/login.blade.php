@extends('layouts.admin')

@section('content')

<h1>Login</h1>

@if (Session::has('flash_error'))
  <div id="flash_error">{{ Session::get('flash_error') }}</div>

@endif


{{ Form::open(array('url'=>'login', 'method'=>'post')) }}

	<p>
		{{ Form::label('username', 'Username', array('class'=>'lblFrm')) }}<br/>
		{{ Form::text('username', Input::old('username')) }}
	</p>

	<p>
		{{ Form::label('password', 'Password') }}<br/>
		{{ Form::password('password') }}
	</p>

	
	<p>{{ Form::submit('Login') }}</p>

{{ Form::close()  }}

@stop
