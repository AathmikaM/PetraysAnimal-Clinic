<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PetOwner;
use App\Treatment;
use Charts;
use DB;



class ChartController extends Controller
{
    public function clientbase()
    {
        
        // $petowner = DB::table('pet_owners')
        // ->select(DB::raw('count(visitdate)')
        // ->where("DATE_FORMAT(visitdate,'%Y')",date('Y'))
        // ->get();



        $petowner = PetOwner::where(DB::raw("DATE_FORMAT(visitdate,'%Y')"),date('Y'))->get(); 
        $chart = Charts::database($petowner,'bar','highcharts')
                    ->title("MY CLIENTS")
                    ->elementLabel("CLIENTS")
                    ->dimensions(1000,500)
                    ->responsive(false)
                    ->groupByMonth(date('Y'),true);
        return view('charts.clientBasecharts',compact('chart'));
    }

    public function income()
    {
        $income = Treatment::where(DB::raw("DATE_FORMAT(total_cost,'%Y')"),date('Y'))->get(); 
        $chart1 = Charts::database($income,'bar','highcharts')
                    ->title("TOTAL INCOME")
                    ->elementLabel("INCOME")
                    ->dimensions(1000,500)
                    ->responsive(false)
                    ->groupByMonth(date('Y'),true);
        return view('charts.incomeCharts',compact('chart1'));
    }


    
    
}
