<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function productView(){
        return view('product');
    }

    public function createView(){
        return view('modal.create');
    }

    public function store(Request $request){
        // dd($request);
        
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'category_id' => 'required|numeric',
            'qty' => 'required|numeric',
            'refill_price' => 'required|decimal:0,2',
            'retail_price' => 'required|decimal:0,2',
            'seller_refill_price' => 'required|decimal:0,2',
            'seller_retail_price' => 'required|decimal:0,2'
        ]);

        $newProduct = Product::create($data);
        return redirect(route('product'));
    }

    public function categoriesView(){
        return view('categories');
    }

    public function add(Request $request){

        $data = $request->validate([
            'name' => 'required'
        ]);

        $newCategories = Category::create($data);
        return redirect(route('product'));
    }
}
