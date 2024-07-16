<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function categoryView(){
        return view('categories');
    }

    
    public function add(Request $request){

        $data = $request->validate([
            'name' => 'required'
        ]);
        
        $Categories = Category::create($data);
        return redirect(route('product'));
    }
}
