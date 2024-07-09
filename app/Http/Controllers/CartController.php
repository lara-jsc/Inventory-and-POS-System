<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function cartView(){
        return view('cart', 
        [  
            'users'=> User::all()
        ]
        );
    }
}
