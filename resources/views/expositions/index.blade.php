@extends('layouts.front')

@section('meta-description')
  <meta name="description" content="Retrouvez toutes les expositions des créations de Karl Mazlo."/>
@endsection

@section('content')
	<div class="row">
		<div class="col-xl-10 offset-xl-1">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="now-tab" data-toggle="tab" href="#now" role="tab" aria-controls="now" aria-selected="true">En cours</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="next-tab" data-toggle="tab" href="#next" role="tab" aria-controls="next" aria-selected="false">A venir</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="past-tab" data-toggle="tab" href="#past" role="tab" aria-controls="past" aria-selected="false">Terminées</a>
			  </li>
			</ul>
			<div class="tab-content" id="myTabContent">
			  <div class="tab-pane fade show active" id="now" role="tabpanel" aria-labelledby="now-tab">
				<div class="expositions">
				  	@forelse($expositions_now as $exposition)
						@include('partials.card-exposition')
					@empty
						<div class="empty-text">Galerie Seikado</div>
						<div class="empty-text">Musée de la Chasse et de la Nature</div>
					@endforelse
				</div>
			  </div>
			  <div class="tab-pane fade" id="next" role="tabpanel" aria-labelledby="next-tab">
			  	<div class="expositions">
				  	@forelse($expositions_to_come as $exposition)
						@include('partials.card-exposition')
					@empty
						<p class="empty-text">Aucune exposition</p>
					@endforelse
			  	</div>
			  </div>
			  <div class="tab-pane fade" id="past" role="tabpanel" aria-labelledby="past-tab">
			  	<div class="expositions">
				  	@forelse($expositions_past as $exposition)
						@include('partials.card-exposition')
					@empty
						<p class="empty-text">Aucune exposition</p>
					@endforelse
				</div>
			  </div>
			</div>
		</div>
	</div>
@endsection

@section('javascript')
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection