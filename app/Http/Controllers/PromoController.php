<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\promo;
use Session;

class PromoController extends Controller
{
    public function index()
    {
        return view('admin.promo.index')->with('promos',promo::orderBy('id','DESC')->paginate(10));

    }

    public function store(Request $request)
    {
        $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $res = "";
                for ($i = 0; $i < 10; $i++) {
                $res .= $chars[mt_rand(0, strlen($chars)-1)];
                }
        promo::create(['code' => $res]);

        Session::flash('success', 'Promo Created successfully');
        return redirect()->route('promo.index');
                        
    }

    public function destroy($id)
    {
     
        $promo = promo::find($id);
        
        $promo->delete();
        Session::flash('success', 'Promo Deleted Successfully');
        return redirect()->back();
    }

    public function trashedPromo()
    {
        $promos = promo::onlyTrashed()->get();

        return view('admin.promo.trashed', compact('promos'));

    }


    public function killPromo($id)
    {
        $promo = promo::withTrashed()->where('id',$id)->first();
        $promo->forceDelete();
        return redirect()->back();

    }
    public function restorePromo($id)
    {
        $promo = promo::withTrashed()->where('id',$id)->first();
        $promo->restore();
        return redirect()->back();
          
    }
}
