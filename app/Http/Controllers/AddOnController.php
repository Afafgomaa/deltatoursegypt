<?php

namespace App\Http\Controllers;

use App\Add_on;
use Illuminate\Http\Request;
use Session;

class AddOnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.addons.index')->with('addons', Add_on::orderBy('id','DESC')->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addons.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        Add_on::create($request->all());

        
        return redirect()->route('Addon.index')
                        ->with('success','Addon created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Add_on  $add_on
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.addons.show')->with('addon', Add_on::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Add_on  $add_on
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addon = Add_on::find($id);
        return view('admin.addons.edit',compact('addon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Add_on  $add_on
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        Add_on::find($id)->update($requestData);
        Session::flash('Success','Your Add on Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Add_on  $add_on
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $add_on = Add_on::find($id);
        
        $add_on->delete();
        Session::flash('success', 'Add on Deleted Successfully');
        return redirect()->back();
    }

    public function trashedAddon()
    {
        $add_on = Add_on::onlyTrashed()->get();

        return view('admin.addons.trashed', compact('add_on'));

    }


    public function killAddon($id)
    {
        $add_on = PAdd_on::withTrashed()->where('id',$id)->first();
        $add_on->forceDelete();
        return redirect()->back();

    }
    public function restoreAddon($id)
    {
        $add_on = Add_on::withTrashed()->where('id',$id)->first();
        $add_on->restore();
        return redirect()->back();
          
    }
}
