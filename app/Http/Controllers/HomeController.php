<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
        return view('home');
    }

    public function slider(){
        return view('admin.home.slider')->with('slider_1', slider::first()->slider_1)
                                        ->with('slider_2', slider::first()->slider_2)
                                        ->with('slider_3', slider::first()->slider_3)
                                        ->with('title_1' , slider::first()->title_1)
                                        ->with('title_2' , slider::first()->title_2)
                                        ->with('title_3' , slider::first()->title_3)
                                        ->with('desc_1'  , slider::first()->description_1)
                                        ->with('desc_2'  , slider::first()->description_2)
                                        ->with('desc_3'  , slider::first()->description_3);
    }

    public function slider_store(Request $request){


        //dd($request);
        $sliders  = slider::find(1);
            //first slider image
        $sliders->slider_1 = $request->slider_1_url;
        $sliders->title_1 = $request->slider_1_title;
        $sliders->description_1 = $request->slider_1_description;

        //second slider image
        $sliders->slider_2 = $request->slider_2_url;
        $sliders->title_2 = $request->slider_2_title;
        $sliders->description_2 = $request->slider_2_description;

        //thired slider image
        $sliders->slider_3  = $request->slider_3_url;
        $sliders->title_3 =$request->slider_3_title;
        $sliders->description_3  = $request->slider_3_description;

        
        

        $sliders->update();
        
        return redirect()->back();
      
    }





}
