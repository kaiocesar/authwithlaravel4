@extends('layouts.admin')

@section('sidebar')
	@parent
	<p>This is append to the admin sidebar</p>

@stop

@section('content')
	<p><b>This is my content</b></p>
@stop