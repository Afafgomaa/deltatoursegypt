<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Referral;

class ReferralController extends Controller
{
    public function index()
    {
        return view('admin.referral.index')->with('referrals',Referral::orderBy('id','DESC')->paginate(10));

    }

    public function store(Request $request)
    {
        $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $res = "";
                for ($i = 0; $i < 10; $i++) {
                $res .= $chars[mt_rand(0, strlen($chars)-1)];
                }
        Referral::create(['code' => $res]);

        Session::flash('success', 'Referral Created successfully');
        return redirect()->route('referral.index');
                        
    }

    public function destroy($id)
    {
     
        $referral = Referral::find($id);
        
        $referral->delete();
        Session::flash('success', 'Referral Deleted Successfully');
        return redirect()->back();
    }

    public function trashedReferral()
    {
        $referrals = Referral::onlyTrashed()->get();

        return view('admin.referral.trashed', compact('referrals'));

    }


    public function killReferral($id)
    {
        $referral = Referral::withTrashed()->where('id',$id)->first();
        $referral->forceDelete();
        return redirect()->back();

    }
    public function restoreReferral($id)
    {
        $referral = Referral::withTrashed()->where('id',$id)->first();
        $referral->restore();
        return redirect()->back();
          
    }
}
