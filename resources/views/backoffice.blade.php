@extends('layout')
@section('content')


    <body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Products</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{url("backoffice/create-product")}}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Product</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>

                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image URL</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>

                    </tr>
                    </thead>

                    @foreach($catalog as $product)
                        <tbody>
                        <tr>

                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->productDescription}}</td>
                            <td>{{$product->productImage}}</td>
                            <td>
                                <form action="backoffice/delete-product/{{$product->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="&#xE15C Supprimer">
                                </form>
                            </td>
                            <td>
                                <form action="backoffice/edit-product/{{$product->id}}" method="get">
                                    @csrf

                                    <input type="submit" class="btn btn-primary" value="Modifier" >
                                </form>
                            </td>

                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>





@endsection
