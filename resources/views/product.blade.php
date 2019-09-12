@extends('layouts.app')

@section('main')
<div class="container">	
<div class="card">
	<div class="row">
		<aside class="col-sm-5 border-right">
<article class="gallery-wrap"> 
<div class="img-big-wrap">
  <div> <a href="#"><img src="https://dummyimage.com/460x300/55595c/fff"></a></div>
</div> <!-- slider-product.// -->

</article> <!-- gallery-wrap .end// -->
		</aside>
		<aside class="col-sm-7">
<article class="card-body p-5">
	<h3 class="title mb-3">{{$product->name}}</h3>

<p class="price-detail-wrap"> 
	<span class="price h3 text-warning"> 
        <span style="color:black;" class="currency">$</span><span style="color:black;" class="num">{{$product->price}}</span>
	</span> 
</p> <!-- price-detail-wrap .// -->
<dl class="item-property">
  <dt>Marca</dt>
  <dd><p>{{$product->brand->name}}</p></dd>
</dl>
<dl class="param param-feature">
  <dt>Categoría</dt>
  <dd>{{$product->category->name}}</dd>
</dl>  <!-- item-property-hor .// -->
<dl class="param param-feature">
  <dt>Delivery</dt>
  <dd>Argentina</dd>
</dl>  <!-- item-property-hor .// -->

<hr>
	<div class="row">
		<div class="col-sm-5">
			<dl class="param param-inline">
			  <dt>Quantity: </dt>
			  <dd>
			  	<select class="form-control form-control-sm" style="width:70px;">
			  		@for ($i = 1; $i <= $product->stock; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
			  	</select>
			  </dd>
			</dl>  <!-- item-property .// -->
		</div> <!-- col.// -->
		
	</div> <!-- row.// -->
	<hr>
    <a href="/add-to-cart/{{$product->id}}" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i> Agregar al carrito </a>
</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->


</div>
    
@endsection
