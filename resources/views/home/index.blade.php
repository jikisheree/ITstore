@extends('layouts.app-master')
@section('content')

<head>
    <link rel="stylesheet" href="/resources/css/homepage.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&family=Prompt&display=swap');

        .tx-head {
            font-family: 'Didot';
            font-size: 70px;
            font-weight: 400;
            line-height: 100px;
            color: rgb(77, 95, 152);
        }

        .text {
            font-family: 'PT Serif', serif;
        }

        p {
            font-family: 'Prompt', 'Roboto Slab';
            color: rgb(0, 0, 0);
        }

        h4{
            font-size: 30px; 
            font-weight: 400; 
            line-height: 30px; 
            color: rgb(77, 95, 152);

        }
    </style>
</head>
<div class="p-5 rounded" style="background-color: rgb(245, 245, 245)">
    @auth
    <h1>Products</h1>
    <p class="lead">Choose the product that you want to buy.</p>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="row">
                @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3 ">
                    <div class="img-thumbnail">
                        <img src="{{ $product->image }}" alt="" style="min-width: 200px; max-width: 200px;">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p class="overflow-md-auto">{{ $product->description }}</p>
                            <p>{{ $product->stock }}</p>
                            <p><strong>Price: </strong> {{ $product->price }}$</p>
                            <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endauth
    @guest
    <h1 class="tx-head">Homepage</h1>
    <p class="lead text">You have to login before buy the products.</p>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <p class="text">What we have in stocks.</p>
            <div class="row">
                @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div style="padding: 25px; border-radius: 8px; border-bottom: 6px solid red; background-color: white; height: max-height; width: 350px; ">
                        <img src="{{ $product->image }}" alt="" style="width: 300px;">
                        <div class="caption">
                            <h4>{{ $product->name }}</h4>
                            <p class="overflow-md-auto th-text" style="font-size: 13px">{{ $product->description }}</p>
                            <p style="color: Gray"><strong style="color: black; font-size: 20px; ">Amount : </strong>{{ $product->stock }}</p>
                            <p style="color: Tomato"><strong style="color: black; font-size: 20px;">Price : </strong> {{ $product->price }} $</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endguest
</div>
@endsection