<?php

namespace App\Http\Controllers;

use Session;
use App\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog.index')->with('posts', post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->home);
        $post = post::create([
            'image' => $request->image,
            'title' => $request->title,
            'desc'  => $request->desc,
            'add_to_home_page' => $request->home
        ]);
        $post->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        $post = post::find($post->id);
        
        return view('admin.blog.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
            
            $post->image = $request->image;
            $post->title = $request->title;
            $post->desc =  $request->desc;
            $post->add_to_home_page = $request->home;
        $post->save();

        return redirect()->route('post.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
       $post  = post::find($post->id);
       $post->delete();
      // Session::flash('success', 'The Post was Just Trashed');
       return redirect()->back();
    }
}
