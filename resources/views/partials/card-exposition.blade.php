<div class="card mb-4 card-expo">

        <div class="card-header">
            <h5 class="card-title text-body">{{ $exposition->title }}</h5>
            <h6 class="card-subtitle text-black-50">{{ $exposition->name }}</h6>
        </div>
    <div class="card-body d-flex flex-column">
        <img src="{{$exposition->images->first()['img_url']}}" class="card-img-top mb-3" alt="...">
        <button type="button" class="mt-auto btn btn-outline-info" data-toggle="modal" data-target="#exposition-{{$exposition->id}}">
            En savoir plus
        </button>
    </div>
</div>


<div class="modal fade" id="exposition-{{$exposition->id}}" tabindex="-1" role="dialog" aria-labelledby="{{ $exposition->title }}"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">{{ $exposition->title }}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! $exposition->description !!}
            </div>
            <div class="d-flex flex-wrap align-items-center justify-content-between m-3">
                @foreach ($exposition->images as $image)
                    <div class="news__image">
                        <img class="w-100" src="{{ asset($image->img_url) }}">
                    </div>
                @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@section('javascript')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
@endsection