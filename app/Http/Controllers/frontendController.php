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
    public function Egypt_tour(){
        return view('Egypt_tour');
    }
    public function Tailor_Made(){
        return view('Tailor_Made');
    }
}
