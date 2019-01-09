<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
        return view('index');
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data =array(
            'email'=>$request->email,
            'message'=>$request->message

        );  
        $mail=$request->email;
        $message=$request->message;

        Mail::to($mail)->send(new SendMail());
        return back()->with('success','Thanks for Contatcting Us');
        // 
    }
}
