<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Pages;
use App\Programs;
use App\faqs;
use App\river_excursion;

class PagesController extends Controller
{
    public function add()
    {
       $pages    =  Pages::where('parent_id', 0)->get(); 
       $faqs     =  faqs::all();
      
       
        return view('admin.pages.add',compact('pages','faqs'));
    }

    public function store(Request $request)
    {
        
        $page = Pages::create([
            'name' => $request->name,
            'title' => $request->title,
            'breif'  => $request->breif,
            'slug' => str_slug($request->title),
            'parent_id' => 0
        ]);
        $page->faq()->attach($request->faq);

        $page->save();

        Session::flash('success', 'Your Page Created Successuflly');

        return redirect()->back();
    }

    public function substore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => 'required|url',
            'breif' => 'required',
            'bg_image' => 'required|url',
            'mainPage' => 'required'

        ]);
        
        $page = Pages::create([
            'name' => $request->name,
            'title' => $request->title,
            'image' => $request->image,
            'breif'  => $request->breif,
            'slug'  => str_slug($request->title),
            'bg_image' => $request->bg_image,
            'overlay' => $request->overlay,
            'parent_id' => $request->mainPage
        ]);

        $page->save();

        Session::flash('success', 'Your SubPage Created Successuflly');

        return redirect()->back();
    }

    // function to handel main page

    public function editPage($id)
    {
        $page = Pages::find($id);
        $faqs     =  faqs::all();
        return view('admin.pages.edit', compact('page','faqs'));
    }

    public function updatePage(Request $request , $id)
    {
        $page = Pages::find($id);
        $page->name = $request->name;
        $page->title = $request->title;
        $page->breif =  $request->breif;
        $page->slug = str_slug($request->title);
        $page->parent_id = 0;
        $page->faq()->sync($request->faq);
        
        $page->save();

        Session::flash('success', 'Your Page Updated Successuflly');

        return redirect()->back();

    }

       // function to hadel suppages

       public function editsubPage($id)
       {
           $spage = Pages::find($id);
           
           return view('admin.pages.subEdit', compact('spage'));
       }
   
       public function updateSubPage(Request $request , $id)
       {
        

           $page = Pages::find($id);
           $validatedData = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => 'required|url',
            'breif' => 'required',
            'bg_image' => 'required|url',
            'parent_id' => 'required|integer'

        ]);
          
           
            $page->name = $request->name;
            $page->title = $request->title;
            $page->image = $request->image;
            $page->breif =  $request->breif;
            $page->slug = str_slug($request->title);
            $page->bg_image  = $request->bg_image;
            $page->overlay = $request->overlay;
            $page->parent_id = $request->parent_id;
            
           
           $page->update();
   
           Session::flash('success', 'Your SubPage Updated Successuflly');
   
           return redirect()->back();
   
       }
    public function deletePage($id)
    {
        $page = Pages::find($id);
        
        //if(!empty($page->section()) ){
           // return redirect()->back()->withErrors('Your can not delete page becuse this page has section  SO Change or Delete section first');
           
       // }else {
            $page->faq()->detach($page);
            $page->delete();
            
            Session::flash('success', 'Your Page Deleted Successuflly');

        return redirect()->back();

        //}
        

    }

    public function trashedPage()
    {
        $pages = Pages::onlyTrashed()->get();
        return view('admin.pages.trashed', compact('pages'));

    }
    public function killPage($id)
    {
        $page = Pages::withTrashed()->where('id', $id)->first();
        $page->forceDelete();
        Session::flash('success', 'Page Deleteed Permantly');
        return redirect()->back();

    }
    public function restorePage($id)
    {
        $page = Pages::withTrashed()->where('id',$id)->first();
        $page->restore();
        Session::flash('success', 'Page restored Succsssefully');

        return redirect()->back();
    }

 
    public function deleteSubPage($id)
    {
        $page = Pages::find($id);
        $page->delete();
        Session::flash('success', 'Your SubPage Deleted Successuflly');

        return redirect()->back();

    }

    public function trashedSubPage()
    {
        $pages = Pages::onlyTrashed()->get();
        return view('admin.pages.trashed', compact('pages'));

    }
    public function killSubPage($id)
    {
        $page = Pages::withTrashed()->where('id', $id)->first();
        $page->forceDelete();
        Session::flash('success', 'SubPage Deleted Permantly');
        return redirect()->back();

    }
    public function restoreSubPage($id)
    {
        $page = Pages::withTrashed()->where('id',$id)->first();
        $page->restore();
        Session::flash('success', 'Page restored Succsssefully');

        return redirect()->back();
    }



/**
* Alogrithm FindPage
* Input : slug title of page as slug from url
* Output :view to main page || view to sub page
* find page then check
* if page parent (), then 
* return view main
* else return view sub
**/


    public function findpage($mainPage)
    {
      if($page = Pages::where('parent_id',0)->where('slug',$mainPage )->first() ){
          $faqs = $page->faq;
        return view('main_packeges', compact('page','faqs'));
    
      }else{
        return redirect()->back();
      }
        
       
        
    }


    public function findSubPage($mainPage, $subPage)
    {

        $mainpage = Pages::where('parent_id',0)->where('slug',$mainPage )->first();
        $page =  Pages::where('parent_id', $mainpage->id )->where('slug', $subPage)->first();


     
        $programs_in = river_excursion::where('pages_id', $page->id)->get();
        if(count($programs_in) > 0){
            return view('Egypt_tour', compact('mainpage','page','programs_in'));

        }else{
            $programs_in = Programs::where('pages_id', $page->id)->get();
            return view('Egypt_tour', compact('mainpage','page','programs_in'));
        }
       
/*
        if(!empty($mainPage)  && !empty($page) ){
            

            
        
        $programs_in;

         if(!empty(Programs::where('pages_id', $page->id)->get() ) ){
            $programs_in = Programs::where('pages_id', $page->id)->get();
            return view('Egypt_tour', compact('mainpage','page','programs_in'));
         }elseif(!empty(river_excursion::where('pages_id', $page->id)->get() ) ){
            $programs_in = river_excursion::where('pages_id', $page->id)->get();
            return view('Egypt_tour', compact('mainpage','page','programs_in'));
         }
        
       

        }else {
            return redirect()->back();
        }

           
            */
            
 
       
        
    }


    
}
