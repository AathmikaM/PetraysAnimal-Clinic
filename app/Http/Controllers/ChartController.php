<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use Charts;
use DB;


class ChartController extends Controller
{
    public function index()
    {
         $appointment = Appointment::where(DB::raw("DATE_FORMAT(dateAndTime,'%Y')"),date('Y'))->get();
        $chart = Charts::database($appointment,'bar','highcharts')
                    ->title("CLIENTS VISIT")
                    ->elementLabel("CLIENTS")
                    ->dimensions(1000,500)
                    ->responsive(false)
                    ->groupByMonth(date('Y'),true);
        return view('charts.clientBasecharts',compact('chart'));
    }
    
    
}
