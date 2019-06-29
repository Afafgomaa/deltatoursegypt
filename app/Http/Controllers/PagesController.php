<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Session;
use App\Pages;
use App\Programs;

class PagesController extends Controller
{
    public function add()
    {
       $pages    =  Pages::where('parent_id', 0)->get(); 
      
       
        return view('admin.pages.add',compact('pages'));
    }

    public function store(Request $request)
    {
        
        $page = Pages::create([
            'name' => $request->name,
            'title' => $request->title,
            'desc'  => $request->desc,
            'slug' => str_slug($request->title),
            'parent_id' => 0
        ]);

        $page->save();

        Session::flash('success', 'Your Page Created Successuflly');

        return redirect()->back();
    }

    public function substore(Request $request)
    {
        $page = Pages::create([
            'name' => $request->name,
            'title' => $request->title,
            'image' => $request->image,
            'desc'  => $request->desc,
            'slug'  => str_slug($request->title),
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
        return view('admin.pages.edit', compact('page'));
    }

    public function updatePage(Request $request , $id)
    {
        $page = Pages::find($id);
        $page->name = $request->name;
        $page->title = $request->title;
        $page->desc =  $request->desc;
        $page->slug = str_slug($request->title);
        $page->parent_id = 0;
        
        $page->save();

        Session::flash('success', 'Your Page Updated Successuflly');

        return redirect()->back();

    }
    public function deletePage($id)
    {
        $page = Pages::find($id);
        $page->delete();
        Session::flash('success', 'Your Page Deleted Successuflly');

        return redirect()->back();

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

    // function to hadel suppages

    public function editsubPage($id)
    {
        $page = Pages::find($id);
        
        return view('admin.pages.subEdit', compact('page'));
    }

    public function updateSubPage(Request $request , $id)
    {
        $page = Pages::find($id);
        $page->name = $request->name;
        $page->title = $request->title;
        $page->image = $request->image;
        $page->desc =  $request->breif;
        $page->slug = str_slug($request->title);
        $page->parent_id = $request->mainPage;
        
        $page->save();

        Session::flash('success', 'Your SubPage Updated Successuflly');

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
 
        $page = Pages::where('parent_id',0)->where('slug',$mainPage )->first();
       
        return view('main_packeges', compact('page'));
    }


    public function findSubPage($mainPage, $subPage)
    {
        $mainpage = Pages::where('parent_id',0)->where('slug',$mainPage )->first();


        $page =  Pages::where('parent_id', $mainpage->id )->where('slug', $subPage)->first();

        $programs_in = Programs::where('page_id', $page->id)->get();
       
        return view('Egypt_tour', compact('mainpage','page','programs_in'));
       
        
    }


    
}
