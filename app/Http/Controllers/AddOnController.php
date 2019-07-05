<?php

namespace App\Http\Controllers;

use App\Addon;
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

        return view('admin.Addons.index')->with('addons', Addon::orderBy('id','DESC')->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Addons.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        Addon::create($request->all());

        
        return redirect()->route('Addon.index')
                        ->with('success','Addon created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Addon  $add_on
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.Addons.show')->with('addon', Addon::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Addon  $add_on
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addon = Addon::find($id);
        return view('admin.Addons.edit',compact('addon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Addon  $addon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        Addon::find($id)->update($requestData);
        Session::flash('Success','Your Add on Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Addon  $add_on
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $add_on = Addon::find($id);
        
        $add_on->delete();
        Session::flash('success', 'Add on Deleted Successfully');
        return redirect()->back();
    }

    public function trashedAddon()
    {
        $addons = Addon::onlyTrashed()->get();

        return view('admin.Addons.trashed', compact('addons'));

    }


    public function killAddon($id)
    {
        $add_on = Addon::withTrashed()->where('id',$id)->first();
        $add_on->forceDelete();
        return redirect()->back();

    }
    public function restoreAddon($id)
    {
        $add_on = Addon::withTrashed()->where('id',$id)->first();
        $add_on->restore();
        return redirect()->back();
          
    }
}
