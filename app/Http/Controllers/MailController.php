<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Mail;
use App\Mail\tailerMadeEmail;

class MailController extends Controller
{
   public function send()
   {
       
       mail::send(new tailerMadeEmail(Request()));
       
      Session::flash('success', 'Your Email Sent Successfully We Will get In Touch With ASAP');
       return redirect()->back();
   }
  
}
