<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function productView(){
        return view('product');
    }

    public function create(){
        return view('modal.create');
    }
}
