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

    public function addnewpet(Request $request){
        // dd($pid);

        $this->validate($request,[
            'name'          => 'required',
            'age'       => 'required',
            'weight'       => 'required',
            'species'         => 'required',
            'colour'         => 'required',
            'special_note'         => 'required'
            'pet_owner_id' => 'required'
            
        ]); 
        $pets = new Pet([
            'name'          => $request->post('name'),
            'age'       => $request->post('age'),
            'weight'       => $request->post('weight'),
            'species'         => $request->post('species'),
            'colour'         => $request->post('colour'),
            'special_note'         => $request->post('special_note'),
            'pet_owner_id' => $request->post('pid')

        ]);
        $pets -> save();
        return redirect()->route('petowner')->with('success','Data Added');
    }
}
