<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class liveSearch extends Controller
{
    public function index(){
        return view('clientlist.clientlist1');
    }
}
