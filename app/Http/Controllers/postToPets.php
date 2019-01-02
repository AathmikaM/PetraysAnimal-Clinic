<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Pet;
Use App\Treatment;
class postToPets extends Controller
{
    public function show($pid){
        $pet=Pet::find($pid);
       // $medicines=Species::find($id);
        return view('pet.petprofile',['pet'=>$pet]);

    }

    public function store(Request $request,Pet $pet){
    
        
    

      


    

    }
}
