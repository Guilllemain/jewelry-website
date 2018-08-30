<div class="card card-expo">
	<div class="card-header">
	  	{{ $exposition->name }}
	</div>
  <img class="card-img-top" src="{{ asset($exposition->image) }}" alt="Card image cap">
  	<div class="card-body">
    	<h5 class="card-title">{{ $exposition->title }}</h5>
    	<p class="card-text">{!! $exposition->description !!}</p>
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