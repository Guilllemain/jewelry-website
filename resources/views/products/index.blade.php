@extends('layouts.front')

@section('meta-description')
  <meta name="description" content="Découvrez les pièces uniques réalisées par Karl Mazlo. Ces bijoux sont entièrement fabriqués à la main."/>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="products__list">
                @foreach($products as $product)
                    <div class="products__list-item">
                        <a href="/creations/{{ $product->id }}">
                            <figure>
                                <img src="{{ $product->thumbnail }}" alt="{{ $product->name }}">
                                <div class="products__list-item--text-wrapper">
                                    <span>{{ $product->name }}</span>
                                </div>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection    
