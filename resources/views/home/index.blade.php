@extends('layouts.app-master')
@section('content')

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&family=Prompt&display=swap');

        .text {
            font-size: 25px;
            font-weight: 700;
            line-height: 25px;

        }

        strong {
            color: black;
            font-size: 20px;
        }

        p {
            font-family: 'Prompt', 'Roboto Slab';
            color: rgb(0, 0, 0);
            font-size: 13px;
        }

        h1 {
            font-family: Gemini Moon Regular;
            font-size: 70px;
            font-weight: 500;
            line-height: 100px;
            color: #4773EB;
            text-align: center;
            ;
        }

        h4 {
            font-size: 20px;
            font-weight: 500px;
            line-height: 30px;
            color: rgb(77, 95, 152);

        }
    </style>
</head>
<div class="bg-light px-5">
    @auth
    <h1>Products</h1>
    <p class="text">Choose the product that you want to buy.</p>

    <div class="row">
        @foreach($products as $product)
        <div class="col-sm-6">
            <div class="card w-0 text-center mx-3 mb-3" style="border-radius: 8px; border-bottom: 6px solid red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="text-center my-3">
                    <img src="{{ $product->image }}" style="width: 250px;">
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $product->Pname }}</h4>
                    <p class="overflow-md-auto">{{ $product->description }}</p>
                    <p style="color: Gray; font-size: 18px;"><strong>Amount : </strong>{{ $product->stock }}</p>
                    <p style="color: Tomato; font-size: 18px;"><strong>Price : </strong> {{ $product->price }} $</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->productCode) }}" class="btn btn-block text-center btn-outline-danger" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endauth

<div class="bg-light px-5">
    @guest
    <h1>Products</h1>
    <p class="text" style="text-shadow: 2px 2px red;">You have to login before buy the products.</p>

    <div class="row">
        @foreach($products as $product)
        <div class="col-sm-6">
            <div class="card w-0 text-center mx-3 mb-3" style="border-radius: 8px; border-bottom: 6px solid red; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                <div class="text-center my-3">
                    <img src="{{ $product->image }}" style="width: 250px;">
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $product->Pname }}</h4>
                    <p class="overflow-md-auto">{{ $product->description }}</p>
                    <p style="color: Gray; font-size: 18px;"><strong>Amount : </strong>{{ $product->stock }}</p>
                    <p style="color: Tomato; font-size: 18px;"><strong>Price : </strong> {{ $product->price }} $</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endguest
</div>
@endsection