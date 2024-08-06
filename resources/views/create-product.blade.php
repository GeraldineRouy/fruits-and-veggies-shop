@extends('layout')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title m-3">Formulaire Création d'un produit</h2>
        </div>
        <div class="panel-body m-5">
            <form class="" action="/product" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="productName">Nom du produit</label>
                    <input type="text" class="form-control @error('productName') is-invalid @enderror" name="productName" id="productName" placeholder="nom du produit">
                    @error('productName')
                        <span class="fs-6 text-danger">{{$message}}</span><br>
                    @enderror
                    <label for="productPrice">Prix du produit</label>
                    <input type="text" class="form-control @error('productPrice') is-invalid @enderror" name="productPrice" id="productPrice" placeholder="prix en Euros">
                    @error('productPrice')
                    <span class="fs-6 text-danger">{{$message}}</span><br>
                    @enderror
                    <label for="productWeight">Poids du produit</label>
                    <input type="text" class="form-control" name="productWeight" id="productWeight" placeholder="poids en grammes">
                    <label for="productQuantity">Stock du produit</label>
                    <input type="text" class="form-control @error('productQuantity') is-invalid @enderror" name="productQuantity" id="productQuantity" placeholder="Stock">
                    @error('productQuantity')
                    <span class="fs-6 text-danger">{{$message}}</span><br>
                    @enderror
                    <label for="productUrl">URL de l'image du produit</label>
                    <input type="text" class="form-control" name="productUrl" id="productUrl" placeholder="URL de l'image du produit">
                    <label for="productDescription">Description</label>
                    <input type="text" class="form-control" name="productDescription" id="productDescription" placeholder="Courte description du produit">
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

                <button type="submit" class="btn btn-success">Créer le produit</button>
            </form>
        </div>
    </div>

@endsection
