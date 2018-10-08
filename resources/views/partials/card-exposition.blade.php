<div class="card lg:w-31% md:w-48% mt-8 mr-2%">
	<div class="card-header">
	  	{{ $exposition->name }}
	</div>
  <img class="card-img-top mx-auto" src="{{ asset($exposition->image) }}" alt="Card image cap">
	<div class="card-body">
  	<h5 class="card-title">{{ $exposition->title }}</h5>
    <div id="headingOne">
      <h6 class="card-subtitle">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none">
          Plus d'informations...
        </button>
      </h6>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <p class="card-text">{!! $exposition->description !!}</p>
    </div>
  	@if($exposition->link)
  		<a href="{{ $exposition->link }}" class="btn btn-outline-info" target="_blank">En savoir plus</a>
  	@endif
	</div>
	<div class="card-footer text-muted">
    @if($exposition->date_end < Carbon\Carbon::today())
      Exposition terminée
    @elseif($exposition->date_start <= Carbon\Carbon::today())
      Jusqu'au {{ $exposition->date_end->format('d/m/Y') }}
    @else
      Du {{ $exposition->date_start->format('d/m/Y') }} au {{ $exposition->date_end->format('d/m/Y') }}
    @endif
	</div>
</div>
