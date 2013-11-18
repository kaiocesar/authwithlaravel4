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
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody class="text-center">
      	@foreach($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->username }}</td>
              <td>{{ $user->email }}</td>
              <td class="action-icons"> 	              	
	              	<a href="#" class="btn btn-default"  data-toggle="tooltip" title="Ver detalhes" ><span class="glyphicon glyphicon-search"></span> </a>
	                <a href="#" class="btn btn-default" data-toggle="tooltip" title="Editar" ><span class="glyphicon glyphicon-pencil"></span> </a> 
	                <a href="#" class="btn btn-default" data-toggle="tooltip" title="Excluir" ><span class="glyphicon glyphicon-trash"></span> </a> 
	          </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@stop
