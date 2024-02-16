<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome(){
        $title = "Benvenuti";
        return view('welcome');
    }
    public function contact_us(){
        return view('contact-us');
    }
    public function contact_us_submit(Request $request){
       $name = $request->input('name');
       $email = $request->input('email');
       $text = $request->input('text');

       Mail::to($email)->send(new ContactMail($name));

       return redirect(route('welcome'))->with('message', 'Email inviata con successo.');
    }
}




