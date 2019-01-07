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
        
        $petowner = PetOwner::where(DB::raw("DATE_FORMAT(created_at,'%Y')"),date('Y'))->get(); 
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
        

        // $income = Treatment::where(DB::raw("sum(total_cost)"),date('Y'))->get(); 
        // $chart1 = Charts::database($income,'bar','highcharts')
        //             ->title("TOTAL INCOME")
        //             ->elementLabel("INCOME")
        //             ->dimensions(1000,500)
        //             ->responsive(false)
        //             ->groupByMonth(date('Y'),true);
        // return view('charts.incomeCharts',compact('chart1'));

    // $chart1 = Charts::multi('bar', 'material')
    // ->title("My Cool Chart")
    // ->dimensions(0, 400) // Width x Height
    // ->template("material")
    // ->dataset('Element 1', [5,20,100])
    // ->dataset('Element 2', [15,30,80])
    // ->dataset('Element 3', [25,10,40])
    // ->labels(['One', 'Two', 'Three']);

    // return view('charts.incomeCharts', ['chart' => $chart]);
        $chart1 = Charts::multi('bar', 'material')
    ->title("My Cool Chart")
    ->dimensions(0, 400) // Width x Height
    ->template("material")
    ->dataset('Element 1', [5,20,100])
    ->dataset('Element 2', [15,30,80])
    ->dataset('Element 3', [25,10,40])
    ->labels(['One', 'Two', 'Three']);

    return view('charts.incomeCharts',compact('chart1'));

// return view('test', ['chart' => $chart1]);
    }   
    
}
