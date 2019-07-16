<?php

namespace App\Http\Controllers;
use Session;
use App\faqs;
use App\post;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.faqs.index')->with('faqs', faqs::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faqs.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        $faqs = faqs::create([
             
            'question' => $request->question,
            'answer'  => $request->answer,
        ]);
        $faqs->save();

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = faqs::find($id);
        
        return view('admin.faqs.edit')->with('faq', $faq);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faqs $faq)
    {
            
          
            $faq->question =  $request->question;
            $faq->answer =  $request->answer;
           
        $faq->save();

        return redirect()->route('faqs.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\faqs  $faqs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
       $faq  = faqs::find($id);
       $faq->delete();
       Session::flash('success', 'The faqs was Just Trashed');
       return redirect()->back();
    }

    public function delete()
    {
        $faqs = faqs::onlyTrashed()->get();
        return view('admin.faqs.trashed')->with('faqs',$faqs );
    }
    public function kill($id)
    {
        $faq = faqs::withTrashed()->where('id',$id)->first();
        $faq->forceDelete();
        Session::flash('success', 'faq Deleted Peramantly');

        return redirect()->back();
    }

    public function restore($id)
    {
        $faq = faqs::withTrashed()->where('id',$id)->first();
        $faq->restore();
        Session::flash('success', 'faqs restored Succsssefully');

        return redirect()->back();
    }
}
