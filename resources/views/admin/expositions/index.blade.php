@extends('layouts.admin')

@section('content')
	<a href="/admin/expositions/create" class="button is-primary is-focused mb-4">Ajouter une exposition</a>
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
	  	@foreach($expositions as $exposition)
		    <tr>
		      <td>{{ $exposition->id }}</td>
		      <td>{{ $exposition->name }}</td>
		      <td>{!! str_limit($exposition->description, 100) !!}</td>
		      <td>
		      	<a class="button is-info is-outlined button_table" href="/admin/expositions/edit/{{ $exposition->id }}">Modifier</a>
		      	<form method="POST" action="/admin/expositions/{{ $exposition->id }}">
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