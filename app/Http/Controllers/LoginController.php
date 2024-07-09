<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function viewLogin(){

        // $user = new User([
        //     'name' => 'Joy',
        //     'email' => 'joy@gmail.com',
        //     'password' => 'qwerty'
        // ]);
        // $user->save();

        // show the table/print 
        // dump(User::all());

        return view('login');
    }
}
