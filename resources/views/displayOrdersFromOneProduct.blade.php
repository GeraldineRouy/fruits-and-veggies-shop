@extends('layout')
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h1 class="display-4 font-weight-bold">Product List</h1>
            </div>
        </div>
        <div class="row mt-4">
            @foreach ($ordersList as $order)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <h1 class="text-center">{{$order->name}}</h1>
                        <p class="text-center text-muted">Browse our exclusive collection of products</p>
                        <img src="{{$order->productImage}}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Price : {{$order->price}}€</h5>
                            <p class="card-text">{{$order->productDescription}}</p>
                            <a href="product/{{$order->id}}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
