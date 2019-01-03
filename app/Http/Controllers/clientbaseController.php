<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Charts;
use DB;
use App\PetOwner;

class clientbaseController extends Controller
{
    //
    public function index($datera = null){
    	// $client = PetOwner::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
     //    $chart = Charts::database($client, 'bar', 'highcharts')
			  //     ->title("Client Base")
			  //     ->elementLabel("Total PetOwners")
			  //     ->dimensions(1000, 500)
			  //     ->responsive(true)
				 //  ->groupByMonth(date('Y'), true);
				  
		
				 //  return view('charts.charts',compact('chart'));
		$client = PetOwner::where('', '')-get();


    }
    
}
