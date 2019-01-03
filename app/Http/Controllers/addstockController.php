<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddStock; 

class addstockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addstock.addstock');  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'        => 'required',
            'quantity'    => 'required',
            'unit_price'  => 'required',
            'expire_date' => 'required',
            'selling_unit_price' => 'required'
        ]); 
        $addstock = new Addstock([
            'name'        => $request->get('name'),
            'quantity'    => $request->get('quantity'),
            'unit_price'  => $request->get('unit_price'),
            'expire_date' => $request->get('expire_date'),
            'relevent_species' => $request->get('relevent_species'),
            'medcine_type' => $request->get('medcine_type'),
            'module' => $request->get('module'),
            'selling_unit_price' => $request->get('selling_unit_price') 
        ]);

        $addstock -> save();
        return redirect()->route('addstock.index')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addstock = Addstock::find($id);
        return view('updatestock.updatestock ',compact('addstock','id'));
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
        $this->  validate($request,[
            'name'        => 'required',
            'quantity'    => 'required',
            'unit_price'    => 'required',
            'expire_date' => 'required',
            'selling_unit_price' => 'required'
        ]); 

        $addstock = AddStock::find($id);
        $addstock->name = $request->get('name');
        $addstock->quantity = $request->get('quantity');
        $addstock->unit_price = $request->get('unit_price');
        $addstock->expire_date = $request->get('expire_date');
        $addstock->relevent_species = $request->get('relevent_species');
		$addstock->medcine_type = $request->get('medcine_type');
        $addstock->module = $request->get('module');
        $addstock->module = $request->get('selling_unit_price');
	

        $addstock -> save();
        return redirect('/viewstock')->with('success','Data Updated');

        
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $addstock = AddStock::find($id);
        $addstock->delete();
        return redirect('/viewstock')->with('success','Data Deleted');
    }



    
}
