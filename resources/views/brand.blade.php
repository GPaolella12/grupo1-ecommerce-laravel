@extends('layouts.app')

@section('main')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Productos {{$brand->name}}</h1>
            <p class="lead text-muted mb-0">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte...</p>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-dark text-white text-uppercase"><i class="fa fa-list"></i> Categorías</div>
                    <ul class="list-group category_block">
                        @foreach ($categories as $category)
                            <li class="list-group-item"><a href="/categoria/{{$category->id}}" style="color: black;">{{$category->name}}</a></li>        
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-dark text-white text-uppercase"><i class="fa fa-list"></i> Marcas</div>
                    <ul class="list-group category_block">
                        @foreach ($brands as $brand)
                            <li class="list-group-item"><a href="/marca/{{$brand->id}}" style="color: black;">{{$brand->name}}</a></li>        
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="/producto/{{$product['id']}}" title="View Product">{{$product->name}}</a></h4>
                                    <p class="card-text">{{$product->brand->name}}</p>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-center mb-3 btn-block">${{$product->price}}</h4>
                                        </div>
                                        <div class="col">
                                            <a href="/add-to-cart/{{$product->id}}" class="btn btn-primary btn-block">Agregar al carrito</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12">
                    <br>
                    <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
