@extends('layouts.app-master')
@section('content')
<div class="bg-light p-5 rounded">
    <h1>Category</h1>
    <p class="lead">You have to login before buy the products.</p>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="row">
                @php
                $i = 0;
                @endphp
                @foreach($categorys as $category)
                @php
                $i++;
                @endphp
                <div class="card mx-3 mb-3" style="width: 18rem; border-radius: 8px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <img class="card-img-top my-3" style="height: 200px;" src="{{ $category->image }}" alt="Card image cap">
                    <div class="card-body mx-auto">
                        <h5 class="card-title text-center">{{ $category->categoryName }}</h5>
                        <a href="/index/p/{{ $i }}" class="btn btn-block text-center btn-outline-danger">See Product</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection