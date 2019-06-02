<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{

    public function index(){
        return view('welcome');
    }

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
    public function Budget_Tours(){
        return view('Egypt-Budget-Tours');
    }
    public function all_packeges(){
        return view('main_packeges');
    }
}
