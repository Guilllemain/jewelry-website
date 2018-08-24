@extends('layouts.admin')

@section('content')
	<a href="/admin/partners/create" class="button is-primary is-focused mb-4">Ajouter une collaboration</a>
	<table class="table">
	  <thead>
	    <tr>
	      <th>ID</th>
	      <th>Nom</th>
	      <th>Logo</th>
	      <th>Modifier ou supprimer</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($partners as $partner)
		    <tr>
		      <td>{{ $partner->id }}</td>
		      <td>{{ $partner->name }}</td>
		      <td>
		      	@if($partner->logo)
		      		<img class="img_table" src="{{ asset($partner->logo) }}">
		      	@endif
		      </td>
		      <td>
		      	<a class="button is-info is-outlined button_table" href="/admin/partners/edit/{{ $partner->id }}">Modifier</a>
		      	<form method="POST" action="/admin/partners/{{ $partner->id }}">
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