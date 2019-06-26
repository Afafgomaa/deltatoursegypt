<?php

namespace App\Http\Controllers;

use App\Programs;
use Illuminate\Http\Request;
use Session;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.programs.index')->with('programs', Programs::orderBy('id','DESC')->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.programs.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $requestData['related_programs_id'] = serialize($request->related_programs_id);
        $requestData['image_gallery'] = serialize($request->image_gallery);
        Programs::create($requestData);

        $request->flash();
        return redirect()->route('Program.index')
                        ->with('success','Program created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.programs.show')->with('program', programs::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Programs::find($id);
        return view('admin.programs.edit',compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        $requestData['related_programs_id'] = serialize($request->related_programs_id);
        $requestData['image_gallery'] = serialize($request->image_gallery);
        
        Programs::find($id)->update($requestData);
        Session::flash('Success','Your Program Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programs  $programs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Programs::find($id);
        $program->delete();
        Session::flash('success', 'Program Deleted Successfully');
        return redirect()->back();
    }

    public function trashedProgram()
    {
        $programs = Programs::onlyTrashed()->get();

        return view('admin.programs.trashed', compact('programs'));

    }


    public function killProgram($id)
    {
        $Programs = Programs::withTrashed()->where('id',$id)->first();
        $Programs->forceDelete();
        return redirect()->back();

    }
    public function restoreProgram($id)
    {
        $Programs = Programs::withTrashed()->where('id',$id)->first();
        $Programs->restore();
        return redirect()->back();
          
    }
}
