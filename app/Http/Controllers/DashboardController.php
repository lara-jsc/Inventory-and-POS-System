<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){

        $users = [
            [
                'uname' => 'Lara',
                'pword' =>'1234'
            ],
            [
                'uname' => 'LJ',
                'pword' => '0000'
            ]
        ];

        return view('dashboard',
        [
            'users' => $users
        ]
    
    );
    }
}
