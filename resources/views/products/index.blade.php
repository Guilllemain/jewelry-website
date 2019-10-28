@extends('layouts.front')

@section('meta-description')
  <meta name="description" content="Découvrez les pièces uniques réalisées par Karl Mazlo. Ces bijoux sont entièrement fabriqués à la main."/>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="products-list">
                @foreach($products as $product)
                    <div class="products-list__item">
                        <a href="/creations/{{ $product->id }}">
                            <figure class="products-list__img-container">
                                <img class="products-list__img" src="{{ $product->thumbnail }}" alt="{{ $product->name }}">
                                <figcaption class="products-list__caption">
                                    <span>{{ $product->name }}</span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection    
