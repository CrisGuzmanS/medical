@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Todos los productos</h1>

    <div class="row">
        @foreach ($products as $product)
        <div class="col-12 col-md-6 col-lg-4">
            <product-card-component></product-card-component>
            <a class="btn btn-success" dusk="{{$product->name}}"
                href="{{route('products.show', ['product' => $product->id])}}">{{$product->name}}</a>
        </div>
        @endforeach
    </div>
</div>

@endsection