<?php

namespace App\Http\Controllers;

use Session;
use App\Sights;
use Illuminate\Http\Request;

class SightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Sights.index')->with('sights',Sights::orderBy('id','DESC')->paginate(5));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sights::create(['name' => $request->name]);

        Session::flash('success', 'sight created successfully');
        return redirect()->route('sight.index');
                        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sights  $sights
     * @return \Illuminate\Http\Response
     */
    public function show(Sights $sights)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sights  $sights
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        return view('admin.Sights.edit')->with('sight',Sights::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sights  $sights
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Sights::find($id)->update($request->all());
        Session::flash('success','Your Sights Updated Successfully');
        return redirect()->route('sight.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sights  $sights
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        $sight = Sights::find($id);
        
        $sight->delete();
        Session::flash('success', 'Sights Deleted Successfully');
        return redirect()->back();
    }

    public function trashedSight()
    {
        $sights = Sights::onlyTrashed()->get();

        return view('admin.Sights.trashed', compact('sights'));

    }


    public function killSight($id)
    {
        $sight = Sights::withTrashed()->where('id',$id)->first();
        $sight->forceDelete();
        return redirect()->back();

    }
    public function restoreSight($id)
    {
        $sight = Sights::withTrashed()->where('id',$id)->first();
        $sight->restore();
        return redirect()->back();
          
    }
}
