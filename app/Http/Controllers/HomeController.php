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
        $sliders  = slider::create([
            //first slider image
        'slider_1' => $request->slider_1_url,
        'title_1' =>$request->slider_1_title,
        'description_1' => $request->slider_1_description,

        //second slider image
        'slider_2' => $request->slider_2_url,
        'title_2' => $request->slider_2_title,
        'description_2' => $request->slider_2_description,

        //thired slider image
        'slider_3' => $request->slider_3_url,
        'title_3' => $request->slider_3_title,
        'description_3' => $request->slider_3_description

        ]);
        

        $sliders->save();
        
        return redirect()->back();
      
    }





}
