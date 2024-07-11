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
                    <input type="text" class="form-control form-control-sm mb-3" name="name" placeholder="Enter Categories name">
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
    