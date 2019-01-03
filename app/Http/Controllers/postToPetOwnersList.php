<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PetOwner;

class postToPetOwnersList extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petowners=PetOwner::all();
        return view('petownerslist.index')->with('petowners',$petowners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        // $this->validate($request,[
        //     'name'          => 'required',
        //     'address'       => 'required',
        //     'mob_no'        => 'required',
        //     'home_visit_id' => 'required',
        //     'email'         => 'required',
        //     'visitdate'     => 'required'
        // ]); 
        // $addstock = new PetOwner([
        //     'name'          => $request->get('name'),
        //     'address'       => $request->get('quantity'),
        //     'mob_no'        => $request->get('unit_price'),
        //     'home_visit_id' => $request->get('expire_date'),
        //     'email'         => $request->get('relevent_species'),
        //     'visitdate'     => $request->get('medcine_type') 
        // ]);

        // $addstock -> save();
        // return redirect()->route('petowners')->with('success','Data Added');


    }


    public function addnewowner(Request $request){
      //  dd($request->name)

        $this->validate($request,[
            'name'          => 'required',
            'address'       => 'required',
            'mob_no'       => 'required',
            'email'         => 'required',
            
        ]); 
        $petowners = new PetOwner([
            'name'          => $request->post('name'),
            'address'       => $request->post('address'),
            'mob_no'       => $request->post('mob_no'),
            'email'         => $request->post('email'),

        ]);
        $petowners -> save();
        return redirect()->route('petowners')->with('success','Data Added');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
    public function destroy($id)
    {
        //
    }
}
