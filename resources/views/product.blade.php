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
    <!-- Single Page Header End -->
        <!-- Cart Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-2">
                    <!-- Add button -->
                <button class="btn btn-md bg-light border mt-4">
                    <a href="{{Route('create')}}"><i class="fa fa-plus"></i> Add</a>
                </button>
            
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Category</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Unit Size</th>
                            <th scope="col">Price Type</th>
                            <th scope="col" >Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>
                                        <p class="mb-0 mt-4">{{$product->id}}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 mt-4">{{$product->name}}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 mt-4">{{$product->description}}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 mt-4">{{$product->category->name}}</p>
                                    </td>

                                    <td>
                                        <p class="mb-0 mt-4">{{$product->price->qty}}</p>
                                    </td>

                                    <td>
                                        <p class="mb-0 mt-4">{{$product->price->unit_size}}</p>
                                    </td>

                                    <td>
                                        <p class="mb-0 mt-4">{{$product->price->price_type}}</p>
                                    </td>
                                    


                                <form action="{{route('product.delete', ['product' => $product])}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <td>
                                        {{-- View Button --}}
                                            <button class="btn btn-md rounded-circle bg-light border mt-4">
                                                <i class="fa fa-eye"></i> 
                                            </button>
                                            
                                            <a href="{{route('product.edit', ['product' => $product]) }}" class="btn btn-md rounded-circle bg-light border mt-4">
                                                <i class="fa fa-pencil"></i> 
                                            </a>
                                            <!-- Delete button -->
                                            <button class="btn btn-md rounded-circle bg-light border mt-4">
                                                <i class="fa fa-trash text-danger"></i>
                                            </button>
                                        </td>
                                </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Cart Page End -->
@endsection