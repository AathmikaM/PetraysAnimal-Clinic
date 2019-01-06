<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class periodic extends Controller
{
    public function show(){
        return view('pet.periodic');
    }
}
