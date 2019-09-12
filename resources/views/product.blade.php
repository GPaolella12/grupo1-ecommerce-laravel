@extends('layouts.app')

@section('main')
    <div class="jumbotron">
        <h1>{{$product->name}}</h1>
    </div>

    <ul>
        <li>
        Price: ${{$product->price}}
        </li>
        <li>
        Stock: {{$product->stock}}
        </li>
        <li>
        Brand: <a href="/marca/{{$product->brand->id}}">{{$product->brand->name}}</a>
        </li>
        <li>
        Category: <a href="/categoria/{{$product->category->id}}">{{$product->category->name}}</a>
        </li>
    </ul>

    <a href="/productos">
        <button class="btn btn-default" type="button" name="button">Todos los productos</button>
    </a>
    
@endsection
