<?php

namespace App\Http\Controllers;
use App\Pet;
use App\PetOwner;
use App\Treatment;
use App\AddStock;
use App\TemporyMed;

use App\IssuedMedicine;
use DB;
use App\PeriodicTreatment;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\SendPeriodic;

class periodic extends Controller
{
    public function index($id,$pid)
    {
        
        $petowner=PetOwner::find($id);
        $pet=Pet::find($pid);
        $periodictreatments=$pet->periodictreatments;
        return view('pet.periodic',['petowner'=>$petowner,'pet'=>$pet,'periodictreatments'=>$periodictreatments]);

    }



    public function store(Request $request,$id,$pid)
    {
        $this->validate($request,[
            'start_date'        => 'required',
            'end_date'=> 'required',
            'description'=> 'required'
            
        ]); 

        $data=array(
            'start_date' => $request->start_date,
            'end_date'=> $request->end_date,
            'description'=> $request->description

        );
        $petowner=PetOwner::find($id);  
        $email=$petowner->email;
        Mail::to($email)->send(new SendPeriodic($data));


            $start_date=\Carbon\Carbon::parse($request->input('start_date'));
            $end_date=\Carbon\Carbon::parse($request->input('end_date'));
            $diferent= $start_date->diffInDays($end_date, false);
      
            $periodic=new PeriodicTreatment;
            $periodic->start_date=$request->input('start_date');
            $periodic->end_date=$request->input('start_date');
            $periodic->description=$request->input('description');
            $periodic->pet_id=$pid;
            $periodic->save();
    
            return back();
    }
}

