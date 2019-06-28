<?php

namespace App\Http\Controllers;

use Session;
use App\Sections;
use App\Pages;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           
        return view('admin.Sections.index')
                                   ->with('sections',Sections::orderBy('id','DESC')->paginate(5));
                                  
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
        Sections::create([
            'name'  => $request->name,
            'image' => $request->image,
            'breif' => $request->breif,
            'page_id' => $request->page_id
            ]);
        

        Session::flash('success', 'Sections created successfully');
        return redirect()->route('section.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function show(Sections $sections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.Sections.edit')
                                    ->with('section',Sections::find($id));
                                    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Sections::find($id)->update($request->all());
        Session::flash('success','Your Sections Updated Successfully');
        return redirect()->route('section.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sections  $sections
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Sections::find($id);
        
        $section->delete();
        Session::flash('success', 'section Deleted Successfully');
        return redirect()->back();
    }

    public function trashedSection()
    {
        $sections = Sections::onlyTrashed()->get();

        return view('admin.Sections.trashed', compact('sections'));

    }


    public function killSection($id)
    {
        $section = Sections::withTrashed()->where('id',$id)->first();
        $section->forceDelete();
        return redirect()->back();

    }
    public function restoreSection($id)
    {
        $section = Sections::withTrashed()->where('id',$id)->first();
        $section->restore();
        return redirect()->back();
          
    }
}
