<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Treatment;
use App\Pet;
use App\PetOwner;

class indexController extends Controller
{


    public function index()
    {
        $totalcost=Treatment::sum('total_cost');
        $tasks = Appointment::where('status','accepted')->get();
        $count = PetOwner::count('id');
         $precentr=25;
         //($totalcost/50000)*100;

        return view('index', compact('tasks','totalcost','count','precentr'));
    }


}
