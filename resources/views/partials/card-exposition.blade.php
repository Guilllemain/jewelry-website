<div class="">
  <div style="display: flex">
    
    <div style="width: 30%">
      <img class="card-img-top" src="{{ asset($exposition->image) }}" alt="Card image cap">
    </div>
    <div class="card-body" style="width: 70%">
      <h5 class="card-title">{{ $exposition->title }}</h5>
      {{-- <p class="card-text">{!! str_limit($exposition->description, 500) !!}</p> --}}

      @if($exposition->link)
        <a href="" class="btn btn-outline-info" target="_blank">En savoir plus</a>
      @endif
    </div>
  </div>
</div>
