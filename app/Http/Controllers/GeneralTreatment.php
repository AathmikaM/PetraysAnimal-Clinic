<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;
use App\PetOwner;
use App\Treatment;
use App\AddStock;
use App\TemporyMed;
use App\IssuedMedicine;
use DB;



class generalTreatment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    // $treatment =new Treatment;
   
    // $treatment->title=$request->input('title');
    // $treatment->discription=$request->input('description');
    // $treatment->quantity=$request->input('quantity');
    // $treatment->medicine=$request->input('inputGroupSelect01');
    // $treatment->save();
    
    // $issuedmedicine-=new IssuedMedicine;
    // $issuedmedicine->treatments_id->treatment->id;
    

    
    // return redirect('/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Make new Treatment when enternig to form
    public function show($id,$pid)
    {
        $treatment=new Treatment;
        $treatment->pet_id=$pid; //pets_id
        $treatment->save();
        $treatid=$treatment->id;
        $treatdata=Treatment::find($treatid);      
        $pet=Pet::find($pid);
        $medicines=AddStock::all();
        $petowner=PetOwner::find($id);
        $temps=TemporyMed::all();
        return view('pet.generaltreatments',['pet'=>$pet,'petowner'=>$petowner,'medicines'=>$medicines,'temps'=>$temps,'treatdata'=>$treatdata]);
    }
//After adding medicine 
    public function show1($id,$pid)
    {


        $treatdata=Treatment::find($treatid);      
        $pet=Pet::find($pid);
        $medicines=AddStock::all();
        $petowner=PetOwner::find($id);
        $temps=TemporyMed::all();
        return view('pet.generaltreatments',['pet'=>$pet,'petowner'=>$petowner,'medicines'=>$medicines,'temps'=>$temps,'treatdata'=>$treatdata]);
    }


    public function treats($id,$pid)
    {
    //     $pet=Pet::find($pid);
    //     $medicines=AddStock::all();
    //     $petowner=PetOwner::find($id);
    //     return view('pet.copy1',['pet'=>$pet,'petowner'=>$petowner,'medicines'=>$medicines]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

//save treatment add button
    public function savet(Request $request,$id,$pid,$tid){
    
        $temp= new TemporyMed;
        $id=$request->input('medicine');
        $med=AddStock::find($id);   
        $price=$med->selling_unit_price;
        $quantity=$request->input('quantity');
        $temp->type=$med->name;
        $temp->selling_unit_price=$med->selling_unit_price;
        $temp->quantity=$request->input('quantity');
        $temp->price=$quantity*$price;
        $temp->save();

        $total=$quantity*$price;


        $totalcost=TemporyMed::sum('price');
        
        

        //$gettemp=TemporyMed::all();

        $petowner=PetOwner::find($id);
        $pet=Pet::find($pid);
        $medicines=AddStock::all();
        $temps=TemporyMed::all();


        $description=Treatment::find($tid);
        $description->title=$request->input('title');
        $description->description=$request->input('description');
        $description->total_cost=$totalcost;
        $description->save();

        $treatdata=Treatment::find($tid); 
    //'gettemp'=>$gettemp,
        return view('pet.add')->with(array('treatdata'=>$treatdata,'pet'=>$pet,'petowner'=>$petowner,'medicines'=>$medicines,'temps'=>$temps,'totalcost'=>$totalcost));


      

    }

    public function save(Request $request,$id,$pid,$tid){


        // $treatment=find($tid);
        // $treatment->title=$request->input('title');
        // $treatment->description=$request->input('description');
        // $treatment->save();
        // $passid=$treatment->id;
         
        // return back()->with('treatdata',$treatdata);
    }

//save the report 
    public function savemed($id,$pid,$tid){
        $meds=TemporyMed::all();

        foreach($meds as $med){

        $issued_medicine=new IssuedMedicine();
        $issued_medicine->treatment_id=$tid;
        $issued_medicine->type=$med->type;
        $issued_medicine->quantity=$med->quantity;
        $issued_medicine->price=$med->price;
        $issued_medicine->save();

        
     }
     $petowner=PetOwner::find($id);
     $pet=Pet::find($pid);
     $medicines=AddStock::all();
     $temps=TemporyMed::all();
     $treatdata=Treatment::find($tid); 
     $gettemp=TemporyMed::all();

   
     DB::table('tempory_meds')->delete();

     return redirect('/pets/'.$id.'/'.$pid);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {
        //
    }


   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$pid,$treatid,$tid)
    {
        
        $row=TemporyMed::find($tid);   
        $row->delete();
        $totalcost=TemporyMed::sum('price'); 
     $petowner=PetOwner::find($id);
     $pet=Pet::find($pid);
     $medicines=AddStock::all();
     $temps=TemporyMed::all();
     $treatdata=Treatment::find($treatid);
     $treatdata->total_price=$totalcost;
     $treatdada->save();

    //  $gettemp=TemporyMed::all();
//'gettemp'=>$gettemp,
     return view('pet.add')->with(array( 'treatdata'=>$treatdata,'pet'=>$pet,'petowner'=>$petowner,'medicines'=>$medicines,'temps'=>$temps,'totalcost'=>$totalcost));

        
    }

    public function realtreatment(Request $request,$id,$pid){

        // $treatment= new Treatment;

        // $pet=Pet::find($pid);   
        // $treatment->pets_id=$pet->name;
        // $price=$med->selling_unit_price;
        // $quantity=$request->input('quantity');
        // $temp->type=$med->name;
        // $temp->selling_unit_price=$med->selling_unit_price;
        // $temp->quantity=$request->input('quantity');
        // $temp->price=$quantity*$price;
        // $temp->save();

        // $gettemp=TemporyMed::all();


        
        // return back()->with(array('treatdata'=>$treatdata, 'treatdata'=>$treatdata));
       
      

    }

    public function view($id,$pid){

        $pet=Pet::find($id);

        $treatments=Treatment::all();


    }

    public function viewtreatment($id,$pid){
        $petowner=PetOwner::find($id);
        $pet=Pet::find($pid);
        $treatments=$pet->treatments;
        return view('pet.viewtreatment',['petowner'=>$petowner,'treatments'=>$treatments]);


    }

}
