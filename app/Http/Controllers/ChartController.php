<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PetOwner;
use App\Treatment;
use Charts;
use DB;
use Carbon\Carbon;
class ChartController extends Controller
{
    public function clientbase(request $request)
    {
        // $year=$request->input('year');
        // $petowner = DB::table('pet_owners')->where("DATE_FORMAT(created_at,'%Y')",date('$year'))->get(); 
        // $chart = Charts::database($petowner,'bar','highcharts')
        //             ->title("MY CLIENTS")
        //             ->elementLabel("CLIENTS")
        //             ->dimensions(1000,500)
        //             ->responsive(false)
        //             ->groupByMonth(date('Y'),true);
        //  return view('charts.clientBasecharts',compact('chart'));
    }

    public function income(request $request)
    {
            
        $income = DB::table('treatments')->whereYear('created_at',$request->year)->get();

        $sumIncome = array(0,0,0,0,0,0,0,0,0,0,0,0);

        for($i=0;$i<count($income);$i++){
            $tmp = Carbon::parse($income[$i]->created_at)->format('m');
                if($tmp=="01"){
                    $sumIncome[0] += $income[$i]->total_cost;
                }else if($tmp=="02"){
                    $sumIncome[1] += $income[$i]->total_cost;
                }else if($tmp=="03"){
                    $sumIncome[2] += $income[$i]->total_cost;
                }else if($tmp=="04"){
                    $sumIncome[3] += $income[$i]->total_cost;
                }else if($tmp=="05"){
                    $sumIncome[4] += $income[$i]->total_cost;
                }else if($tmp=="06"){
                    $sumIncome[5] += $income[$i]->total_cost;
                }else if($tmp=="07"){
                    $sumIncome[6] += $income[$i]->total_cost;
                }else if($tmp=="08"){
                    $sumIncome[7] += $income[$i]->total_cost;
                }else if($tmp=="09"){
                    $sumIncome[8] += $income[$i]->total_cost;
                }else if($tmp=="10"){
                    $sumIncome[9] += $income[$i]->total_cost;
                }else if($tmp=="11"){
                    $sumIncome[10] += $income[$i]->total_cost;
                }else if($tmp=="12"){
                    $sumIncome[11] += $income[$i]->total_cost;
                }
        }

        return view('charts.incomeCharts',["totalIncome" => $sumIncome]);

    }   
    
}


// DB::table('treat')-> where('id',2)->get();
