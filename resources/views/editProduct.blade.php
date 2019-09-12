@extends('layouts.app')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4 class="text-center">{{ __('Editar producto') }}</h4></div>

                    <div class="card-body">
                        <form method="POST" action="/productos/editar" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$product->id}}">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Marca') }}</label>

                                <div class="col-md-6">
                                    <select for="brand" class="form-control @error('brand') is-invalid @enderror" value="{{ old('brand') }}" name="brand" id="brand" required>
                                        @foreach ($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Categoría') }}</label>

                                <div class="col-md-6">
                                    <select for="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category') }}" name="category" id="category" required>
                                        @foreach ($categories as $category)
                                            <option value="{{$product->category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>                      

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" required autocomplete="price">

                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="discount" class="col-md-4 col-form-label text-md-right">{{ __('Descuento (Opcional)') }}</label>

                                <div class="col-md-6">
                                    <input id="discount" type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" value="{{ $product->discount }}" autocomplete="name" autofocus>

                                    @error('discount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>

                                <div class="col-md-6">
                                    <input id="stock" type="stock" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ $product->stock }}" required autocomplete="stock">

                                    @error('stock')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Imágen') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class=" @error('image') is-invalid @enderror" name="image" autocomplete="new-image">

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Editar producto') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
