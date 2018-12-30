<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AppointmentController extends Controller
{
    public function accept(request $request, $id)
    {
        $hire = Appointment::find($id);
        $hire->status = 'accepted';
        $hire->save();
        $request->session()->flash('alert-success', 'Accept successfully');
        return Redirect::back();
    }

    public function cancel(request $request, $id)
    {
        $hire = Appointment::find($id);
        $hire->status = 'cancelled';
        $hire->save();
        $request->session()->flash('alert-success', 'cancelled successfully');
        return Redirect::back();
    }

    public function index()
    {
        $appointments = Appointment::all();
        return view('appointments', ['appointments' => $appointments]);
    }
    public function calendar()
    {
        //$tasks = Appointment::all();
        $tasks = Appointment::where('status','accepted')->get();
        return view('index', compact('tasks'));
    }
}
