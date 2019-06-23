<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
use App\post;
use App\Pages;
class frontendController extends Controller
{

    public function index(){
       
        
        return view('welcome')->with('slider_1', slider::first()->slider_1)
                              ->with('slider_2', slider::first()->slider_2)
                              ->with('slider_3', slider::first()->slider_3)
                              ->with('title_1' , slider::first()->title_1)
                              ->with('title_2' , slider::first()->title_2)
                              ->with('title_3' , slider::first()->title_3)
                              ->with('desc_1'  , slider::first()->description_1)
                              ->with('desc_2'  , slider::first()->description_2)
                              ->with('desc_3'  , slider::first()->description_3)
                              ->with('blog'    , post::where(['add_to_home_page'=> 1])->take(4)->get());
                              
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
        return view('blog')->with('blog', Post::all());
    }
}
