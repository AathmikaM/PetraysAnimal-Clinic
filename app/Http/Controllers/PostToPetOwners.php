<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PetOwner;

class PostToPetOwners extends Controller
{
    public function index()
    {
        
        $pet=PetOwner::all();
        return view('Clients.clientlist')->with('pet',$pet);
    }

    public function show($id)
    {
       
        $post=PetOwner::find($id);
        return view('pet.shw',['post'=>$post,'pets'=>$post->pets]);
        //return view('pet.shw')->with('post',$post->id);
        


        // $post=Clients::find($id);
        // //$pets=petlist::find($id);

        // return view('pet.shw',['post'=>$post,'pets'=>$post->pets]);

        //return view('pet.shw',['post'=>$post,'pets'=>$pets]);
        //return view('pet.shw',[$post,$pets]);
       // return view('pet.shw',['post'=>$post,'pets'=>$pets]);

        
    }

}
