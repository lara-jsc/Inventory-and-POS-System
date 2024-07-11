


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
        <h2 class="text-center mb-4">Add Product</h2>
        <form method="post" action="{{route('product.store')}}">
            @csrf
            @method('post')
            <!-- Product Name -->
            <div class="form-group row">
                <label for="product-name" class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm mb-3" name="name" placeholder="Enter product name">
                </div>
            </div>

            <!-- Description -->
            <div class="form-group row">
                <label for="description" class="col-sm-3 col-form-label col-form-label-sm">Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control form-control-sm mb-3" name="description" placeholder="Enter product description" rows="3"></textarea>
                </div>
            </div>

            <!-- Category -->
            <div class="form-group row">
                <label for="category" class="col-sm-3 col-form-label col-form-label-sm">Category</label>
                <div class="col-sm-9">
                    <select class="form-control form-control-sm mb-3" name="category_id">
                        <option value="">Select a category</option>
                        <option value="1">Dishwashing</option>
                        <option value="2">Laundry</option>
                        <option value="3">Car</option>
                        <option value="4">Pet</option>
                        <option value="5">Others</option>
                        <option value="6">Cleaner</option>

                    </select>
                </div>
            </div>

            {{-- Quantity --}}
            <div class="form-group row">
                <label for="description" class="col-sm-3 col-form-label col-form-label-sm">Quantity</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm mb-3" name="qty" placeholder="Enter quantity">
                </div>
            </div>

            <!-- Prices -->
            <div class="form-group row">
                <label for="refill-price" class="col-sm-3 col-form-label col-form-label-sm">Refill price</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm mb-3" name="refill_price" placeholder="Enter refill price">
                </div>
            </div>
            <div class="form-group row">
                <label for="retail-price" class="col-sm-3 col-form-label col-form-label-sm">Retail price</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm mb-3" name="retail_price" placeholder="Enter retail price">
                </div>
            </div>
            <div class="form-group row">
                <label for="seller-price" class="col-sm-3 col-form-label col-form-label-sm">Seller refill price</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm mb-3" name="seller_refill_price" placeholder="Enter seller refill price">
                </div>
            </div>
            <div class="form-group row">
                <label for="seller-price" class="col-sm-3 col-form-label col-form-label-sm">Seller retail price</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm mb-3" name="seller_retail_price" placeholder="Enter seller retail price">
                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group row">
                <div class="col-sm-9 offset-sm-3">
                    <button type="submit" class="btn btn-primary btn-sm mb-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
