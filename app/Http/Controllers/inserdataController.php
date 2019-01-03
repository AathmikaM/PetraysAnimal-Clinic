<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PetOwner;

class inserdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    {

   $this->validate($request,[
            'petOwnerName'          => 'required',
            'ReasonForAppointment'       => 'required',
            'dateAndTime'        => 'required',
            'address' => 'required',
            'status'         => 'required',
            'mobile_num'     => 'required'
        ]); 
        $Appointment = new Appointment([
            'petOwnerName'          => $request->get('name'),
            'ReasonForAppointment'       => $request->get('reson'),
            'dateAndTime'        => $request->get('date'),
            'address' => $request->get('location'),
            'status'         => 'pending',
            'mobile_num'     => $request->get('mobile') 
        ]);

        $Notification = new Notification([
            'notifiable_id'          => $request->get('mobile'),
            'notifiable_type'        => $request->get('reson'), 
        ]);

 

        $Appointment -> save();
        $Notification -> save();
        return $Appointment; 


    }



}
