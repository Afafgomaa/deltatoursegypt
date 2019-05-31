<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function Packages(){
        return view('Egypt-tours-Packages');
    }
    public function Nile_River_Cruises(){
        return view('Nile-River-Cruises');
    }
}
