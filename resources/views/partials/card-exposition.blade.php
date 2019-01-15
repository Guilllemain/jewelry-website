<div id="accordion" style="margin-bottom: 1rem;">
  <div class="card">
    <div class="card-header" id="heading-{{$exposition->id}}">
      <h5 class="mb-0">
        <a class="news__title" href="" data-toggle="collapse" data-target="#collapse--{{$exposition->id}}" aria-expanded="false" aria-controls="collapseOne">
          {{ $exposition->title }}
        </a>
      </h5>
    </div>

    <div id="collapse--{{$exposition->id}}" class="collapse" aria-labelledby="heading-{{$exposition->id}}" data-parent="#accordion">
        <div class="card-body">
          <img class="news__image" src="{{ asset($exposition->image) }}">
          <p class="card-text">{!! $exposition->description !!}</p>
          @if($exposition->link)
            <a href="" class="btn btn-outline-info" target="_blank">En savoir plus</a>
          @endif
        </div>
    </div>
  </div>
</div>
