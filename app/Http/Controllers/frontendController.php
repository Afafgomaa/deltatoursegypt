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
    public function nileRiverCruises(){
        return view('Nile-River-Cruises');
    }
    public function egyptTour(){
        return view('Egypt_tour');
    }
    public function tailorMade(){
        return view('Tailor_Made');
    }
    public function budgetTours(){
        return view('Egypt-Budget-Tours');
    }
    public function allPackeges(){
        return view('main_packeges');
    }
    public function blog(){
        return view('blog');
    }
}
