@extends('layout.layout')
@section('content')
       <!-- Single Page Header start -->
       <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Sales</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Cart</li>
        </ol>
    </div>

    <!-- Main Content -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Add Sales</h2>
        <form method="post" action="">
            @csrf
            @method('post')
            <!-- Product Name -->
            <div class="form-group row">
                <label for="product-name" class="col-sm-3 col-form-label col-form-label-sm">Product ID</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm mb-3" name="id" placeholder="Enter product ID">
                </div>
            </div>
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

            <div class="form-group row">
                <label for="category" class="col-sm-3 col-form-label col-form-label-sm">Price Type</label>
                <div class="col-sm-9">
                    <select class="form-control form-control-sm mb-3" name="price_type">
                        <option value="">Select a price type</option>
                        <option value="Refill">Refill</option>
                        <option value="Retail">Retail</option>
                        <option value="Seller">Seller</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="category" class="col-sm-3 col-form-label col-form-label-sm">Unit Size</label>
                <div class="col-sm-9">
                    <select class="form-control form-control-sm mb-3" name="unit_size">
                        <option value="">Select a unit size</option>
                        <option value="Liter">Liter</option>
                        <option value="Gallon">Gallon</option>
                        <option value="Drum">Drum</option>
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

            <!-- Price -->
            <div class="form-group row">
                <label for="refill-price" class="col-sm-3 col-form-label col-form-label-sm">Price</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm mb-3" name="price" placeholder="Enter refill price">
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