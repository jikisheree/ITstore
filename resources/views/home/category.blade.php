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
                <div class="card mx-3 mb-3" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->categoryName }}</h5>
                        <a href="/index/p/{{ $i }}" class="btn btn-primary">See Product</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection