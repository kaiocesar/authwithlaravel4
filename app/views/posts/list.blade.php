@extends('layouts.dash')

@section('content')

	<div class="bs-example">

	  <h1 class="text-left">Post</h1>

	  <div class="panel panel-default">
	    <table class="table">
	      <thead>
	        <tr>
	          <th class="text-center">#</th>
	          <th class="text-center">Title</th>
	          <th class="text-center">Body</th>
	          <th class="text-center">Actions</th>
	        </tr>
	      </thead>
	      <tbody class="text-center">
	      	@foreach($posts as $post)
	            <tr>
	              <td>{{ $post->id }}</td>
	              <td>{{ $post->title }}</td>
	              <td>{{ substr($post->body,0,120) . '...' }}</td>	              
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
