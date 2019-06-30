<?php

namespace App\Http\Controllers;

use App\Programs;
use Illuminate\Http\Request;
use Session;
use App\Highlight;
use App\Pages;



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
         $highlights  = Highlight::orderBy('id' , 'DESC')->get();
         
        return view('admin.programs.add',compact('highlights'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $program = Programs::create([
        'main_image' => $request->main_image,
        'price' => $request->price,
        'name' => $request->name,
        'kind' => $request->kind,
        'days' => $request->days,
        'nights' => $request->nights,
        'brief' => $request->brief,
        'place' => $request->place,
        'overview' => $request->overview,
        'pricing' => $request->pricing,
        'price_children' => $request->price_children,
        'page_id' => $request->page_id,
        'image_gallery' => serialize($request->image_gallery),
        'itinerary_heading' => serialize($request->itinerary_heading),
        'itinerary' => serialize($request->itinerary),
        'related_programs_id' =>$request->related_programs_id,
        
        'slug' => str_slug($request->name),

        ]);
        
        $program->Highlights()->attach($request->package_highlights_id);
        $program->Sights()->attach($request->holiday_sights_id);
        $program->Accommodations()->attach($request->accom_id);
        $program->Addons()->attach($request->add_on_id);


$program->save();
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
        $highlights  = Highlight::orderBy('id' , 'DESC')->get();
        return view('admin.programs.edit',compact('program','highlights'));
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
        
        $program = Programs::find($id);
        
        
        $program->main_image =  $request->main_image;
        $program->price = $request->price;
        $program->name = $request->name;
        $program->kind  = $request->kind;
        $program->days = $request->days;
        $program->nights = $request->nights;
        $program->brief = $request->brief;
        $program->place = $request->place;
        $program->overview = $request->overview;
        $program->pricing = $request->pricing;
        $program->price_children = $request->price_children;
        $program->page_id = $request->page_id;
        $program->image_gallery = serialize($request->image_gallery);
        $program->itinerary_heading = serialize($request->itinerary_heading);
        $program->itinerary = serialize($request->itinerary);
       
        $program->slug = str_slug($request->name);
    
            $program->related_programs_id = $request->related_programs_id ;
            $program->Highlights()->sync($request->package_highlights_id);
            $program->Sights()->sync($request->holiday_sights_id);
            $program->Accommodations()->sync($request->accom_id);
            $program->Addons()->sync($request->add_on_id);
        
        $program->save();
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
    public function findProgram($mainPage,$subPage,$program)
    {

        $mainpage = Pages::where('parent_id',0)->where('slug',$mainPage )->first();


        $page =  Pages::where('parent_id', $mainpage->id )->where('slug', $subPage)->first();

        //$programs_in = Programs::where('page_id', $page->id)->get();
       
        //return view('Egypt_tour', compact('mainpage','page','programs_in'));



        $program = Programs::where('slug', $program )->first();
        return view('egyptTours/testOfEgypt',compact('mainpage','page','program'));
    }
}
