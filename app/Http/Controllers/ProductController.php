<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Price;


class ProductController extends Controller
{
    
    public function productView(Request $request){
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $products = Product::with('category', 'price')
                ->where('name', 'like', '%' . $searchTerm . '%')
                ->get();
        } else {
            $products = Product::with('category', 'price')->get();
        }
    
        return view('product', compact('products'));
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
            'price_type' => 'required|string',
            'unit_size' => 'required|string',
            'qty' => 'required|numeric',
            'price' => 'required|numeric|min:0',
        ]);

        $newProduct = Product::create([
            'name' => $data['name'],
            'category_id' => $data['category_id'],
            'description' => $data['description'],
        ]);

        $newProduct->price()->create([
            'price_type' => $data['price_type'],
            'unit_size' => $data['unit_size'],
            'qty' => $data['qty'],
            'price' => $data['price'],
        ]);

        return redirect()->route('product')->with('success', 'Product added successfully.');
    }

    public function categoriesView(){
        return view('categories');
    }

    public function edit(Product $product){
        $categories = Category::all(); 
        $prices = Price::all();
        return view('modal.edit' , ['product' => $product, 'categories' => $categories,'prices' => $prices ]);
    }

    public function update(Product $product, Request $request){
 

        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'category_id' => 'required|numeric',
            'price_type' => 'required|string',
            'unit_size' => 'required|string',
            'qty' => 'required|numeric',
            'price' => 'required|numeric|min:0',
        ]);

        $product->update([
            'name' => $data['name'],
            'category_id' => $data['category_id'],
            'description' => $data['description'],
        ]);

        $product->price()->update([
            'price_type' => $data['price_type'],
            'unit_size' => $data['unit_size'],
            'qty' => $data['qty'],
            'price' => $data['price'],
        ]); 
     
        return redirect()->route('product')->with('success', 'Product Update successfully.');
    }

    public function delete(Product $product){
        $product->delete();
        
        return redirect()->route('product')->with('success', 'Product Delete successfully.');
    }

    public function search(){
        
    }
}
