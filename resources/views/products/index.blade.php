@extends('layouts.front')

@section('meta-description')
  <meta name="description" content="Découvrez les pièces uniques réalisées par Karl Mazlo. Ces bijoux sont entièrement fabriqués à la main."/>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="products__list">
                {{-- <div class="products__list-item">
                    <a href="#">
                        <img width="250px" height="250px" src="{{$products->first()->thumbnail}}" alt="{{$products->first()->name}}">
                        <div style="position: absolute; background: red; top: 0; width: 100%; height: 100%">
                            <span>{{ $products->first()->name }}</span>
                        </div>
                    </a>
                </div> --}}
                @foreach($products as $product)
                    <figure class="products__list-item">
                        <a href="/creations/{{ $product->id }}">
                            <img src="{{ $product->thumbnail }}" alt="{{ $product->name }}">
                            <div class="products__list-item--text-wrapper">
                                <span class="products__list-item-name">{{ $product->name }}</span>
                            </div>
                        </a>
                    </figure>
                @endforeach
            </div>
        </div>
    </div>
@endsection    
