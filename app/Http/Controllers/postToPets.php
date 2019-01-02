<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Pet;
Use App\Treatment;
Use App\PetOwner;
class postToPets extends Controller
{
    public function show($id,$pid){
        
        $petowner=PetOwner::find($id);
        $pet=Pet::find($pid);
        return view('pet.petprofile',['pet'=>$pet,'petowner'=>$petowner]);

    }


    
    public function store(Request $request,$id,$pid){
    
        $pet=Pet::find($pid);
        $pet->special_note=$request->input('special_note');
        $pet->save();

         return back();

    }
}
