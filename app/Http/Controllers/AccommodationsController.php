<?php

namespace App\Http\Controllers;

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
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accommodations  $accommodations
     * @return \Illuminate\Http\Response
     */
    public function show(Accommodations $accommodations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accommodations  $accommodations
     * @return \Illuminate\Http\Response
     */
    public function edit(Accommodations $accommodations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accommodations  $accommodations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accommodations $accommodations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accommodations  $accommodations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accommodations $accommodations)
    {
        //
    }
}
