


@extends('layout.layout')
@section('content')
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Product</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Cart</li>
        </ol>
    </div>
    <!-- Main Content -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Product</h2>
        <form method="post" action="{{ route('product.update', ['product' => $product->id]) }}">

            @csrf
            @method('put')

            <!-- Product Name -->
            <div class="form-group row">
                <label for="product-name" class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm mb-3" name="name" value="{{$product->name}}" placeholder="Enter product name">
                </div>
            </div>

            <!-- Description -->
            <div class="form-group row">
                <label for="description" class="col-sm-3 col-form-label col-form-label-sm">Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control form-control-sm mb-3" name="description" placeholder="Enter product description" rows="3">{{$product->description}}</textarea>
                </div>
            </div>

            <!-- Category -->
            <div class="form-group row">
                <label for="category" class="col-sm-3 col-form-label col-form-label-sm">Category</label>
                <div class="col-sm-9">
                    <select class="form-control form-control-sm mb-3" name="category_id">
                        <option value="">Select a category</option>
                        <option value="1" {{ $product->category_id == 1 ? 'selected' : '' }}>Dishwashing</option>
                        <option value="2" {{ $product->category_id == 2 ? 'selected' : '' }}>Laundry</option>
                        <option value="3" {{ $product->category_id == 3 ? 'selected' : '' }}>Car</option>
                        <option value="4" {{ $product->category_id == 4 ? 'selected' : '' }}>Pet</option>
                        <option value="5" {{ $product->category_id == 5 ? 'selected' : '' }}>Others</option>
                        <option value="6" {{ $product->category_id == 6 ? 'selected' : '' }}>Cleaner</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="category" class="col-sm-3 col-form-label col-form-label-sm">Price Type</label>
                <div class="col-sm-9">
                    <select class="form-control form-control-sm mb-3" name="price_type">
                        <option value="">Select a price type</option>
                        <option value="refill" {{ $product->price->price_type === 'refill' ? 'selected' : '' }}>Refill</option>
                        <option value="retail" {{ $product->price->price_type === 'retail' ? 'selected' : '' }}>Retail</option>
                        <option value="seller" {{ $product->price->price_type === 'seller' ? 'selected' : '' }}>Seller</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="category" class="col-sm-3 col-form-label col-form-label-sm">Unit Size</label>
                <div class="col-sm-9">
                    <select class="form-control form-control-sm mb-3" name="unit_size">
                        <option value="">Select a unit size</option>
                        <option value="liter"  {{$product->price->unit_size === 'liter' ? 'selected' : ''}}>Liter</option>
                        <option value="gallon" {{$product->price->unit_size === 'gallon' ? 'selected' : ''}}>Gallon</option>
                        <option value="drum"   {{$product->price->unit_size === 'drum' ? 'selected' : ''}}>Drum</option>
                    </select>
                </div>
            </div>

            {{-- Quantity --}}
            <div class="form-group row">
                <label for="description" class="col-sm-3 col-form-label col-form-label-sm">Quantity</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm mb-3" name="qty" value="{{$product->price->qty}}" placeholder="Enter quantity">
                </div>
            </div>

            <!-- Price -->
            <div class="form-group row">
                <label for="refill-price" class="col-sm-3 col-form-label col-form-label-sm">Price</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm mb-3" name="price" value="{{$product->price->price}}" placeholder="Enter refill price">
                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group row">
                <div class="col-sm-9 offset-sm-3">
                    <button type="submit" class="btn btn-primary btn-sm mb-3">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
