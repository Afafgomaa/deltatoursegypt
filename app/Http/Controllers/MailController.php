<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;

class MailController extends Controller
{
   public function send()
   {
       //dd(Request());
       mail::send(['text' =>  'mail'], ['data' => Request() ], function($message){
           $message->to('gomaamohamedzidan@gmail.com', 'To Delta Toures Egypt')->subject('Tailer Made');
           $message->from(Request()->email, Request()->name);

       });
       
      Session::flash('success', 'Your Email Sent Successfully We Will get In Touch With ASAP');
       return  redirect()->back();
   }
}
