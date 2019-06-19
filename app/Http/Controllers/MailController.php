<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class MailController extends Controller
{
   public function send()
   {
       mail::send(['text' =>  'mail'], ['name' => 'enquery'], function($message){
           $message->to('gomaamohamedzidan@gmail.com', 'To Delta Toures Egypt')->subject('test Email');
           $message->from('gomaamohamedzidan@gmail.com', 'Afaf');

       });
       return  redirect()->back();
   }
}
