<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AutoCompleteController extends Controller
{
     function index()
     {
         return view('addstock.addstock');
     }   

     function fetch(Request $request)
     {
         $query = $request->get('query');
         $data = DB::table('medicines')
                 ->where('medicine_name','LIKE','%{$query}%')
                 ->get();
         $output = '<ul class="dropdown-menu"
                 style= "display:block;
                 position:relative">';
        
         foreach($data as $row)
         {
             $output .= '<li><a href="#">'.$row->
             medicine_name.'</a></li>';
        }
        $output .= '</ul>';
        echo $output;

     }
}
