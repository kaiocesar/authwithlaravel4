@extends('layouts.dash')


@section('content')
@foreach($users as $user)
	<p>{{ $user->email }}</p>
@endforeach

<div class="bs-example">
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Panel heading</div>

        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Username</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
@stop
