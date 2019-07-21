<?php

namespace App\Http\Controllers;

use App\river_excursion;
use Illuminate\Http\Request;
use Session;
use App\Pages;
use Illuminate\Support\Facades\DB;

class RiverExcursionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.river_excursion.index')->with('programs', river_excursion::orderBy('id','DESC')->paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages_programs = Pages::where('parent_id','>',0)->get();
         
        return view('admin.river_excursion.add',compact('pages_programs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $program = river_excursion::create([
            'main_image' => $request->main_image,
            'price' => $request->price,
            'name' => $request->name,
            'start_day' => $request->start_day,
            'days_1' => $request->day_1,
            'days_2' => $request->day_2,
            'small_brief' => $request->small_brief,
            'brief' => $request->brief,
            'pricing' => $request->pricing,
            'image_gallery' => serialize($request->image_gallery),
            'place_1' => $request->place_1,
            'itinerary_heading_1' => serialize($request->itinerary_heading_1),
            'itinerary_body_1' => serialize($request->itinerary_body_1),
            'place_2' => $request->place_2,
            'itinerary_heading_2' => serialize($request->itinerary_heading_2),
            'itinerary_body_2' => serialize($request->itinerary_body_2),
            'include' => $request->include,
            'exclude' => $request->exclude,
            'facilitis' => $request->facilitis,
            'general' => $request->general,
            'pages_id' => $request->pages_id,
            'small_group' => $request->small_group,
            'slug' => str_slug($request->name),
    
            ]);

            $program->related()->attach($request->related_programs_id);

            $program->save();
                Session::flash('Success','Your Program created Successfully');
                        return redirect()->route('river_excursion.index')
                                        ->with('success','Program created successfully');
                   

            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\river_excursion  $river_excursion
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        return view('admin.river_excursion.show')->with('program', river_excursion::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\river_excursion  $river_excursion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = river_excursion::find($id);
        
        $pages_programs = Pages::where('parent_id','>',0)->get();
        $related_programs_collection = DB::table('related_river_excursion')->where('river_excursion_id', $id)->get();
        return view('admin.river_excursion.edit',compact('program','pages_programs','related_programs_collection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\river_excursion  $river_excursion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $program = river_excursion::find($id);
        
        
        $program->main_image =  $request->main_image;
        $program->price = $request->price;
        $program->name = $request->name;
        $program->start_day = $request->start_day;
        $program->days_1 = $request->days_1;
        $program->days_2 = $request->days_2;
        $program->small_brief = $request->small_brief;
        $program->brief = $request->brief;
        $program->include = $request->include;
        $program->exclude = $request->exclude;
        $program->pricing = $request->pricing;
        $program->facilitis = $request->facilitis;
        $program->general = $request->general;
        $program->pages_id = $request->pages_id;
        $program->small_group = $request->small_group;
        $program->image_gallery = serialize($request->image_gallery);

        $program->place_1 = $request->place_1;
        $program->itinerary_heading_1 = serialize($request->itinerary_heading_1);
        $program->itinerary_body_1 = serialize($request->itinerary_body_1);
        $program->place_2 = $request->place_2;
        $program->itinerary_heading_2 = serialize($request->itinerary_heading_2);
        $program->itinerary_body_2 = serialize($request->itinerary_body_2);
       
        $program->slug = str_slug($request->name);
    
        $program->related()->sync($request->related_programs_id);
           
        
        $program->save();
        Session::flash('Success','Your Program Updated Successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\river_excursion  $river_excursion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = river_excursion::find($id);
        $program->delete();
        Session::flash('success', 'Program Deleted Successfully');
        return redirect()->back();
    }

    public function trashedProgram()
    {
        $programs = river_excursion::onlyTrashed()->get();

        return view('admin.river_excursion.trashed', compact('programs'));

    }


    public function killProgram($id)
    {
        $Programs = river_excursion::withTrashed()->where('id',$id)->first();
        $Programs->forceDelete();
        return redirect()->back();

    }
    public function restoreProgram($id)
    {
        $Programs = river_excursion::withTrashed()->where('id',$id)->first();
        $Programs->restore();
        return redirect()->back();
          
    }
}
