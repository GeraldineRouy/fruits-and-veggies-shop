@extends('layout')
@section('content')

    <h1>Modification du produit {{$product->name}}</h1>

    <div class="panel-body">
        <form class="" action="/backoffice/edit-product/{{$product->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="productName">Nom du produit</label>
                <input type="text" class="form-control @error('productName') is-invalid @enderror" name="productName" id="productName" value="{{$product->name}}">
                @error('productName')
                    <span class="fs-6 text-danger">{{$message}}</span><br>
                @enderror
                <label for="productPrice">Prix du produit</label>
                <input type="text" class="form-control @error('productPrice') is-invalid @enderror" name="productPrice" id="productPrice" value="{{$product->price}}">
                @error('productPrice')
                <span class="fs-6 text-danger">{{$message}}</span><br>
                @enderror
                <label for="productWeight">Poids du produit</label>
                <input type="text" class="form-control" name="productWeight" id="productWeight" value="{{$product->productWeight}}">
                <label for="productQuantity">Stock du produit</label>
                <input type="text" class="form-control @error('productQuantity') is-invalid @enderror" name="productQuantity" id="productQuantity" value="{{$product->quantity}}">
                @error('productQuantity')
                <span class="fs-6 text-danger">{{$message}}</span><br>
                @enderror
                <label for="productUrl">URL de l'image du produit</label>
                <input type="text" class="form-control" name="productUrl" id="productUrl" value="{{$product->productImage}}">
                <label for="productDescription">Description</label>
                <input type="text" class="form-control" name="productDescription" id="productDescription" value="{{$product->productDescription}}">
            </div>
            <div class="form-group">
                <label for="fruitOrVeggie">Fruit ou légume?</label>
                <select name="fruitOrVeggie" id="fruitOrVeggie" class="form-control">
                    <option value="fruit">fruit</option>
                    <option value="veggie">légume</option>
                </select>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="organic" value="yes"> Issu de l'agriculture biologique
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Modifier le produit</button>
        </form>
    </div>

@endsection
