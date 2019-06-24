<?php

namespace App\Http\Controllers;

use Session;
use App\Accommodations;
use Illuminate\Http\Request;


class AccommodationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Accommodations.index')->with('accom',Accommodations::all() );
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Accommodations.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $accom = Accommodations::create([
            'name' => $request->name,
            'location' => $request->location,
            'small_iamge' => $request->small_iamge,
            'thumbnail_iamge' => $request->image_thumbnail,
            'tripadvisor_link' => $request->tripadvisor_link,
            'brief'            => $request->brief,
            'gallery_image' => serialize($request->iamge_gallery)
        ]);
        


        $accom->save();
        Session::flash('success', 'Your Accommodation Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accommodations  $accommodations
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $accommodation = Accommodations::find($id);
       
        return view('admin.Accommodations.show ',compact('accommodation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accommodations  $accommodations
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accommodation = Accommodations::find($id);
        return view('admin.Accommodations.edit', compact('accommodation'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accommodations  $accommodations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
       $accommodation = Accommodations::find($id);
       //dd($accommodation);
       $accommodation->name = $request->name;
       $accommodation->location = $request->location;
       $accommodation->small_iamge = $request->small_iamge;
       $accommodation->thumbnail_iamge = $request->image_thumbnail;
       $accommodation->tripadvisor_link = $request->tripadvisor_link;
       $accommodation->brief        = $request->brief;
       $accommodation->gallery_image =  serialize($request->iamge_gallery);

       $accommodation->save();
        
        Session::flash('success', 'Your Accommodation updated Successfully');
        return redirect()->back();
    
    }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accommodations  $accommodations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accommodation =  Accommodations::find($id);
        $accommodation->delete();
        return redirect()->back();
    }

    public function trashedAccommodation()
    {
        $accommodation = Accommodations::onlyTrashed()->get();

        return view('admin.Accommodations.trashed', compact('accommodation'));

    }


    public function killAccommodation($id)
    {
        $accommodation = Accommodations::withTrashed()->where('id',$id)->first();
        $accommodation->forceDelete();
        return redirect()->back();

    }
    public function restoreAccommodation($id)
    {
        $accommodation = Accommodations::withTrashed()->where('id',$id)->first();
        $accommodation->restore();
        return redirect()->back();
          
    }
}
