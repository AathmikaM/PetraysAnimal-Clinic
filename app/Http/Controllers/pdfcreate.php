<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\PetOwner;
use App\Treatment;
use App\TemporyMed;

class pdfcreate extends Controller
{
    public function pdfcr($id,$pid,$tid){
        //dd($id);
        $petowner=PetOwner::find($id);
        $temps=TemporyMed::all();
        $treatdata=Treatment::find($tid);
        $total=TemporyMed::sum('price');
        
        $details=['title'=>'test','petowner'=>$petowner,'temps'=>$temps,'treatdata'=>$treatdata,'total'=>$total];
        $doc=PDF::loadview('pdf.pdf',$details);
        return $doc->download('mydoc.pdf');
    }
}
