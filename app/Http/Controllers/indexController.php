<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class indexController extends Controller
{


    public function index()
    {
        $tasks = Appointment::where('status','accepted')->get();
        return view('index', compact('tasks'));
    }


}
