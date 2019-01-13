{{-- <div style="display: flex; margin-bottom: 2rem;">
  <div style="width: 30%; max-height: 10rem; overflow: hidden">
    <img class="" style="margin: auto; width: 100%;" src="{{ asset($exposition->image) }}" alt="Card image cap">
  </div>
  <div class="card-body" style="width: 70%">
    <h5 class="card-title">{{ $exposition->title }}</h5>
    <p class="card-text">{!! str_limit($exposition->description, 200) !!}</p>

    @if($exposition->link)
      <a href="" class="btn btn-outline-info" target="_blank">En savoir plus</a>
    @endif
  </div>
</div> --}}

<div id="accordion" style="margin-bottom: 1rem;">
  <div class="card">
    <div class="card-header" id="heading-{{$exposition->id}}">
      <h5 class="mb-0">
        <a class="exposition__title" href="" data-toggle="collapse" data-target="#collapse--{{$exposition->id}}" aria-expanded="false" aria-controls="collapseOne">
          {{ $exposition->title }}
        </a>
      </h5>
    </div>

    <div id="collapse--{{$exposition->id}}" class="collapse" aria-labelledby="heading-{{$exposition->id}}" data-parent="#accordion">
      {{-- <div style="display: flex"> --}}
        {{-- <div class="card-img" style="width: 30%">
          <img style="width: 100%" src="{{ asset($exposition->image) }}">
        </div> --}}
        <div class="card-body">
          <img style="width: 30%" src="{{ asset($exposition->image) }}">
          <p class="card-text">{!! $exposition->description !!}</p>
          @if($exposition->link)
            <a href="" class="btn btn-outline-info" target="_blank">En savoir plus</a>
          @endif
        </div>
      {{-- </div> --}}
    </div>
  </div>
</div>
