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
                    <a href=""><i class="fa fa-plus"></i> Add</a>
                </button>
            
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Category</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Refill price</th>
                            <th scope="col">Retail price</th>
                            <th scope="col">Seller price</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p class="mb-0 mt-4">1</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">Pet Shampoo</p>
                                </td>
                                <td class="d-none d-md-table-cell" style="max-width: 300px;">
                                    <p class="mb-0 mt-4">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">Retail</p>
                                </td>

                                <td>
                                    <p class="mb-0 mt-4">10</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">2.99 $</p>
                                </td>

                                <td>
                                    <p class="mb-0 mt-4">2.99 $</p>
                                </td>

                                <td>
                                    <p class="mb-0 mt-4">2.99 $</p>
                                </td>
                                <td>
                                
                                {{-- View Button --}}
                                <button class="btn btn-md rounded-circle bg-light border mt-4">
                                    <i class="fa fa-eye"></i> 
                                </button>

                                <!-- Edit button -->
                                <button class="btn btn-md rounded-circle bg-light border mt-4">
                                    <i class="fa fa-pencil"></i> 
                                </button>
                                
                                <!-- Delete button -->
                                <button class="btn btn-md rounded-circle bg-light border mt-4">
                                    <i class="fa fa-trash text-danger"></i>
                                </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Cart Page End -->
@endsection