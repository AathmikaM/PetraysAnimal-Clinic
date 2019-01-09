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

    public function index1()
    {
        $petowners=PetOwner::all();
        return view('petownerslist.index1')->with('petowners',$petowners);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    public function addnewowner(Request $request){

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
        $petowners = PetOwner::find($id);
        //return view('petownerslist.index ',compact('petowners','id')); 
        return view('petownerslist.index ')->with('petowners',$petowners)->with('id',$id);
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
            'address'    => 'required',
            'mob_no'    => 'required',
            'email' => 'required',
        ]); 

        $petowners = PetOwner::find($id);
        $petowners->name = $request->get('name');
        $petowners->address = $request->get('address');
        $petowners->mob_no = $request->get('mob_no');
        $petowners->email = $request->get('email');

        $petowners -> save();
        return redirect('/petowners')->with('success','Data Updated');


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $petowners = PetOwner::find($id);
        $petowners->delete();
        return redirect('/petowners')->with('success',' Successfully  Deleted');
    }
}
