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
                        <h1 class="text-center">Commande n°{{$order->id}}</h1>
                        <p class="text-center text-muted">Détails de la commande</p>
                        @foreach($order->products as $product)
                        <div class="card-body">
                            <h5 class="card-title">{{$product->pivot->quantity}} {{$product->name}}</h5>
                            <a href="product/{{$product->id}}" class="btn btn-primary">View Details</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
