<?php

namespace App\Http\Controllers;

use App\Programs;
use Illuminate\Http\Request;
use Session;
use App\Highlight;
use App\Pages;
use App\river_excursion;
use Illuminate\Support\Facades\DB;


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
         $pages_programs = Pages::where('parent_id','>',0)->get();
         
        return view('admin.programs.add',compact('highlights','pages_programs'));
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
        'start_day' => $request->start_day,
        'kind' => $request->kind,
        'days' => $request->days,
        'nights' => $request->nights,
        'brief' => $request->brief,
        'place' => $request->place,
        'overview' => $request->overview,
        'pricing' => $request->pricing,
        'general' => $request->general,
        'price_children' => $request->price_children,
        'image_gallery' => serialize($request->image_gallery),
        'itinerary_heading' => serialize($request->itinerary_heading),
        'itinerary' => serialize($request->itinerary),
        'pages_id' => $request->pages_id,
        'small_group' => $request->small_group,
        'slug' => str_slug($request->name),

        ]);
        $program->related()->attach($request->related_programs_id);
        $program->Highlights()->attach($request->package_highlights_id);
        $program->Sights()->attach($request->holiday_sights_id);
        $program->Accommodations()->attach($request->accom_id);
        $program->Addons()->attach($request->add_on_id);
       


$program->save();
Session::flash('Success','Your Program created Successfully');
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
        $pages_programs = Pages::where('parent_id','>',0)->get();
        $related_programs_collection = DB::table('programs_related')->where('programs_id', $id)->get();
        return view('admin.programs.edit',compact('program','highlights','pages_programs','related_programs_collection'));
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
        $program->start_day = $request->start_day;
        $program->kind  = $request->kind;
        $program->days = $request->days;
        $program->nights = $request->nights;
        $program->brief = $request->brief;
        $program->place = $request->place;
        $program->overview = $request->overview;
        $program->pricing = $request->pricing;
        $program->general = $request->general;
        $program->price_children = $request->price_children;
        $program->pages_id = $request->pages_id;
        $program->small_group = $request->small_group;
        $program->image_gallery = serialize($request->image_gallery);
        $program->itinerary_heading = serialize($request->itinerary_heading);
        $program->itinerary = serialize($request->itinerary);
       
        $program->slug = str_slug($request->name);
    
            $program->related()->sync($request->related_programs_id);
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

        
        if(!empty(river_excursion::where('slug', $program )->first())){

           

            $program = river_excursion::where('slug', $program )->first();
            
             $allFacilitis = explode(',' , $program->facilitis);
             $allFacilitis_vidided = array_chunk($allFacilitis,3);
             $allIncludes  = explode(',',  $program->include);
             $allIncludesDvided = array_chunk($allIncludes,2);
             $allExcludes  = explode(',',  $program->exclude);
             $allExcludesDvided = array_chunk($allExcludes,2);
             $allPricing  = explode(',',  $program->pricing);
             $allPricingsDvided = array_chunk($allPricing,3);
             

             $related_programs_collection = DB::table('related_river_excursion')->where('river_excursion_id', $program->id)->get();
            return view('egyptTours/single_river', compact('mainpage',
                                                          'page','program',
                                                          'allFacilitis',
                                                          'allIncludes',
                                                          'allFacilitis_vidided',
                                                          'allIncludesDvided',
                                                          'allExcludesDvided',
                                                          'allPricingsDvided',
                                                          'related_programs_collection'));

           }elseif(!empty(Programs::where('slug', $program )->first()) ){

            $program = Programs::where('slug', $program )->first();

            if(!empty($mainpage) && !empty($page) && !empty( $program)){

                $related_programs_collection = DB::table('programs_related')->where('programs_id', $program->id)->get();

               $all_heighlights  =  $this->division($program->Highlights);
     
        
                $count_of_heighlights = $this->divied($all_heighlights,2);
                $allPricing  = explode(',',  $program->pricing);
                $allPricingsDvided = array_chunk($allPricing,2);
        
        
                $divide_heighlights_1 = array_slice($all_heighlights,0,$count_of_heighlights / 2);
                $divide_heighlights_2 = array_slice($all_heighlights,$count_of_heighlights / 2);
               
               
                return view('egyptTours/testOfEgypt',compact('mainpage',
                                                             'page',
                                                             'program',
                                                             'related_programs_collection',
                                                             'divide_heighlights_1',
                                                             'divide_heighlights_2',
                                                             'allPricingsDvided')); 
        }else {
            return redirect()->back();
        }

       
    }

     
    }

/**
* Alogrithm divied array of recoured
* Input : array of data
* Output : data divided
* return data divided
**/


    protected function division($array)
    {
        $all_data = [];
        
        foreach($array as $data){

            array_push($all_data, $data); 
         }
            return $all_data;
    }

/**
* Alogrithm divied half of array 
* Input : array of data, number of divied
* Output : data divided for number of section
* quarter or Half or One third 
* return data divided
**/


protected function divied($array,$n)
{
   $data_divided =  count($array) - count($array) % $n ;
    return $data_divided ;
}


}
