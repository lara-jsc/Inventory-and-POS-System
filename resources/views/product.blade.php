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

    <div class="container mt-3">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
        <!-- Single Page Header End -->
            <!-- Cart Page Start -->
            <div class="container-fluid py-5">
                <div class="container py-2">
                        <!-- Add button -->
                        <div class="d-flex justify-content-end mb-4">
                            @include('shared.search-bar')
                            <a href="{{ Route('create') }}" class="btn btn-md bg-success text-white border">
                                <i class="fa fa-plus"></i> Add
                            </a>
                        </div>    
                        
                    <div class="table-responsive-xl">
                        <table class="table table-hover no-warp">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Qty</th>
                                <th>Unit Size</th>
                                <th>Price Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            {{$product->id}}
                                        </td>
                                        <td>
                                        {{$product->name}}
                                        </td>
                                        <td>
                                            {{$product->description}}
                                        </td>

                                        <td>
                                            {{$product->category->name}}
                                        </td>

                                        <td>
                                            {{$product->price->qty}}
                                        </td>

                                        <td>
                                            {{$product->price->unit_size}}
                                        </td>

                                        <td>
                                            {{$product->price->price_type}}
                                        </td>
                                        
                                
                                            <td class="">
                                            {{-- View Button --}}
                                                    <button class="btn btn-sm btn-success border mb-2">
                                                        <i class="fa fa-eye"></i>  View
                                                    </button>
                                                    
                                                    <a href="{{route('product.edit', ['product' => $product]) }}" class="btn btn-sm btn-warning border mb-2">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </a>
                                                    <form action="{{route('product.delete', ['product' => $product])}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <!-- Delete button -->
                                                        <button class="btn btn-sm btn-danger border">
                                                            <i class="fa fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                            </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
            <!-- Cart Page End -->
    @endsection