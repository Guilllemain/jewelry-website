@extends('layouts.admin')

@section('content')
	<a href="/admin/creation/create" class="button is-primary is-focused mb-4">Ajouter une création</a>
	<table class="table">
	  <thead>
	    <tr>
	      <th>ID</th>
	      <th>Nom</th>
	      <th>Description</th>
	      <th>Modifier ou supprimer</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($products as $product)
		    <tr>
		      <td>{{ $product->id }}</td>
		      <td>{{ $product->name }}</td>
		      <td>{!! str_limit($product->description, 100) !!}</td>
		      <td>
		      	<a class="button is-info is-outlined button_table" href="/admin/creation/edit/{{ $product->id }}">Modifier</a>
		      	<form method="POST" action="/admin/creation/{{ $product->id }}">
		      		@csrf
		      		@method('DELETE')
		      		<button type="submit" id="delete" class="button is-danger is-outlined">
		      		    <span>Supprimer</span>
		      		    <span class="icon is-small">
		      		      <i class="fas fa-times"></i>
		      		    </span>
		      		  </button>
		      	</form>
		      </td>
		    </tr>
		    @endforeach
	  </tbody>
	</table>
@endsection

@section('javascript')
@endsection