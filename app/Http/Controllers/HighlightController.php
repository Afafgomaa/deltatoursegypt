<?php

namespace App\Http\Controllers;

use Session;
use App\Highlight;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Highlights.index')->with('highlights',Highlight::orderBy('id','DESC')->paginate(5));
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
        Highlight::create(['name' => $request->name]);

        
        return redirect()->route('highlight.index')
                        ->with('success','Highlights created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function show(Highlight $highlight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.Highlights.edit')->with('highlight',Highlight::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        Highlight::find($id)->update($request->all());
        Session::flash('success','Your Highlight Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $highlight = Highlight::find($id);
        
        $highlight->delete();
        Session::flash('success', 'Highlight Deleted Successfully');
        return redirect()->back();
    }

    public function trashedHighlight()
    {
        $highlights = Highlight::onlyTrashed()->get();

        return view('admin.Highlights.trashed', compact('highlights'));

    }


    public function killHighlight($id)
    {
        $highlight = Highlight::withTrashed()->where('id',$id)->first();
        $highlight->forceDelete();
        return redirect()->back();

    }
    public function restoreHighlight($id)
    {
        $highlight = Highlight::withTrashed()->where('id',$id)->first();
        $highlight->restore();
        return redirect()->back();
          
    }
}
