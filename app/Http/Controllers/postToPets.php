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
        return view('pet.petprofile',['pet'=>$pet,'treatments'=>$pet->treatments]);

    }

    public function store(Request $request,Pet $pet){
    
        
   
      $treatment->title=$request->input('title');
      $treatment->discription=$request->input('description');
      $treatment->quantity=$request->input('quantity');
      $treatment->medicine=$request->input('inputGroupSelect01');
      $treatment->save();

      

      
      return redirect('/create');
    

    }
}
