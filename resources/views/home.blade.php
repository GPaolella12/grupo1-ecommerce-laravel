@extends("layouts.app")

@section("title")
  Welcome!
@endsection

@section("main")
  <div class="jumbotron">
    <h1>Bienvenido!</h1>
    <h2>Mira nuestros productos</h2>
    <a href="/productos">
      <button class="btn btn-primary" type="button" name="button">Products</button>
    </a>
  </div>
@endsection
