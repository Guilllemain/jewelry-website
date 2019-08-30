@extends('layouts.front')

@section('meta-description')
  <meta name="description" content="Retrouvez toutes les expositions des créations de Karl Mazlo."/>
@endsection

@section('content')
	<div class="mx-8 my-5 d-flex justify-content-between flex-wrap">
	  	@foreach($expositions as $exposition)
			@include('partials.card-exposition')
		@endforeach
	</div>
@endsection
