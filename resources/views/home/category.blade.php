@extends('layouts.app-master')
@section('content')
<div class="page page-home">
    <section class="section-media">
        <div>
            <picture>
                <img src="https://media-cdn.bnn.in.th/249451/CoverPage_ACER_Winter_sale_011122-151122-category_banner_medium.jpg" style="width: 1325px;" alt="Acer Brand Fair" loading="lazy" class="image">
            </picture>
        </div>
    </section>
    <section class="container" style="margin-top: 2rem">
        <div class="bg-light mx-10 rounded">
            <div class="header">
                <h1 class="tag-name">Category</h1>
            </div>
            <div class="flex-center position-ref full-height" style="margin-top: 1rem">
                <div class="row">
                    @php
                    $i = 0;
                    @endphp
                    @foreach($categorys as $category)
                    @php
                    $i++;
                    @endphp
                    <div class="card mx-3 mb-3" style="width: 18rem;">
                        <img class="card-img-top my-3" style="height: 200px;" src="{{ $category->image }}" alt="Card image cap">
                        <div class="card-body mx-auto">
                            <h5 class="card-title text-center">{{ $category->categoryName }}</h5>
                            <a href="/index/p/{{ $i }}" class="btn btn-primary">See Product</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
@endsection