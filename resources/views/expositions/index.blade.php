@extends('layouts.front')

@section('meta-description')
  <meta name="description" content="Retrouvez toutes les expositions des créations de Karl Mazlo."/>
@endsection

@section('content')
	<div class="row">
		<div class="col-xl-10 offset-xl-1">
			{{-- <div class="expositions"> --}}
			  	@foreach($expositions as $exposition)
					@include('partials.card-exposition')
				@endforeach
			{{-- </div> --}}
		</div>
	</div>
@endsection

@section('javascript')
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection