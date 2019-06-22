<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Session;
use App\Pages;

class PagesController extends Controller
{
    public function add()
    {
       $pages =  Pages::all();
        return view('admin.pages.add',compact('pages'));
    }

    public function store(Request $request)
    {
        
        $page = Pages::create([
            'name' => $request->name,
            'title' => $request->title,
            'desc'  => $request->desc,
            'parent_id' => 0
        ]);

        $page->save();

        Session::flash('success', 'Your Page Created Successuflly');

        return redirect()->back();
    }
}
