


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
        <form method="POST" action="#">
            <!-- Product Name -->
            <div class="form-group row">
                <label for="product-name" class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm mb-3" id="product-name" placeholder="Enter product name">
                </div>
            </div>

            <!-- Description -->
            <div class="form-group row">
                <label for="description" class="col-sm-3 col-form-label col-form-label-sm">Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control form-control-sm mb-3" id="description" placeholder="Enter product description" rows="3"></textarea>
                </div>
            </div>

            <!-- Category -->
            <div class="form-group row">
                <label for="category" class="col-sm-3 col-form-label col-form-label-sm">Category</label>
                <div class="col-sm-9">
                    <select class="form-control form-control-sm mb-3" id="category">
                        <option value="">Select a category</option>
                        <option value="category1">Category 1</option>
                        <option value="category2">Category 2</option>
                        <option value="category3">Category 3</option>
                    </select>
                </div>
            </div>

            <!-- Prices -->
            <div class="form-group row">
                <label for="refill-price" class="col-sm-3 col-form-label col-form-label-sm">Refill price</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm mb-3" id="refill-price" placeholder="Enter refill price">
                </div>
            </div>
            <div class="form-group row">
                <label for="retail-price" class="col-sm-3 col-form-label col-form-label-sm">Retail price</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm mb-3" id="retail-price" placeholder="Enter retail price">
                </div>
            </div>
            <div class="form-group row">
                <label for="seller-price" class="col-sm-3 col-form-label col-form-label-sm">Seller price</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm mb-3" id="seller-price" placeholder="Enter seller price">
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
