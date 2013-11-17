@extends('layouts.dash')


@section('content')

	


<div class="bs-example">
	<h1 class="text-left">Users</h1>
  <div class="panel panel-default">
    <table class="table">
      <thead>
        <tr>
          <th class="text-center">#</th>
          <th class="text-center">Name</th>
          <th class="text-center">Username</th>
          <th class="text-center">Email</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->username }}</td>
              <td>{{ $user->email }}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@stop
