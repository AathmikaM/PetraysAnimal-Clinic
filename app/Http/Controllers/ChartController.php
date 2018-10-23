<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddStock;
use Charts;
use DB;


class ChartController extends Controller
{
    public function index()
    {
        $addstock = AddStock::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $chart = Charts::database($addstock,'bar','highcharts')
                    ->title("STOCK DETAILS")
                    ->elementLabel("STOCK")
                    ->dimensions(1000,500)
                    ->responsive(false)
                    ->groupByMonth(date('Y'),true);
        return view('charts.charts',compact('chart'));
    }
}
