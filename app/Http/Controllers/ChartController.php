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
        $client = DB::table('pet_owners')->whereYear('created_at',$request->year)->get();

        $totalClient = array(0,0,0,0,0,0,0,0,0,0,0,0);

        for($i=0;$i<count($client);$i++){
            $tmp = Carbon::parse($client[$i]->created_at)->format('m');
                if($tmp=="01"){
                    $totalClient[0] += 1;
                }else if($tmp=="02"){
                    $totalClient[1] += 1;
                }else if($tmp=="03"){
                    $totalClient[2] += 1;
                }else if($tmp=="04"){
                    $totalClient[3] += 1;
                }else if($tmp=="05"){
                    $totalClient[4] += 1;
                }else if($tmp=="06"){
                    $totalClient[5] += 1;
                }else if($tmp=="07"){
                    $totalClient[6] += 1;
                }else if($tmp=="08"){
                    $totalClient[7] += 1;
                }else if($tmp=="09"){
                    $totalClient[8] += 1;
                }else if($tmp=="10"){
                    $totalClient[9] += 1;
                }else if($tmp=="11"){
                    $totalClient[10] += 1;
                }else if($tmp=="12"){
                    $totalClient[11] += 1;
                }
        }

        return view('charts.clientBasecharts',["totalclients" => $totalClient]);
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
