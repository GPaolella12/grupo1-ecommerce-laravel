@extends('layouts.app')
@section('main')
<table id="cart" class="table table-hover table-condensed">
    <thead>
    <tr>
        <th style="width:50%">Product</th>
        <th style="width:10%">Price</th>
        <th style="width:8%">Quantity</th>
        <th style="width:22%" class="text-center">Subtotal</th>
        <th style="width:10%"></th>
    </tr>
    </thead>
    <tbody>

    <?php $total = 0 ?>

    @if(session('cart'))
        @foreach(session('cart') as $id => $details)

            <?php $total += $details['price'] * $details['quantity'] ?>

            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs"><img src="https://dummyimage.com/300x200/55595c/fff" width="100" height="100" class="img-responsive"/></div>
                        <div class="col-sm-9">
                            <h4 class="nomargin">{{ $details['name'] }}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="Price">${{ $details['price'] }}</td>
                <td data-th="Quantity">
                    <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                </td>
                <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                <td class="actions" data-th="">
                    <form action="/cart" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$id}}">
                        <button type="submit" class="btn-link" style="border:none;">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endif

    </tbody>
    <tfoot>
    <tr class="visible-xs">
        <td class="text-center"><strong>Total {{ $total }}</strong></td>
    </tr>
    <tr>
        <td><a href="{{ url('/productos') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continuar comprando</a></td>
        <td colspan="2" class="hidden-xs"></td>
        <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
    </tr>
    </tfoot>
</table>
@endsection