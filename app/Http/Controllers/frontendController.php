<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
use App\post;
use App\Pages;
use App\Sections;
class frontendController extends Controller
{

    public function index(){
       
        $parents  = [];
        foreach(Pages::where('parent_id', 0)->get() as $page){
            array_push($parents, $page);
        }
        
        //dd($parents);
        
        return view('welcome')->with('slider_1', slider::first()->slider_1)
                              ->with('slider_2', slider::first()->slider_2)
                              ->with('slider_3', slider::first()->slider_3)
                              ->with('title_1' , slider::first()->title_1)
                              ->with('title_2' , slider::first()->title_2)
                              ->with('title_3' , slider::first()->title_3)
                              ->with('desc_1'  , slider::first()->description_1)
                              ->with('desc_2'  , slider::first()->description_2)
                              ->with('desc_3'  , slider::first()->description_3)
                              ->with('blog'    , post::where(['add_to_home_page'=> 1])->take(4)->get())
                              ->with('sections', Sections::all());
                              
    }


   
    public function blog(){
        return view('blog')->with('blog', Post::all());
    }
}
