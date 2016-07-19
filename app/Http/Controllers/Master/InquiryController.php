<?php

namespace App\Http\Controllers\Master;

use App\Models\Ads;
use App\Models\Design;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InquiryController extends Controller
{

    public function index()
    {
        $ads = Ads::all();
        return view('master.inquiry.index',['ads'=>$ads]);
    }

    public function show($id)
    {
        $ads = Ads::with('design','adtype')->findOrFail($id);
        return view('master.inquiry.detail',['ads'=>$ads]);
    }

    public function downloadDesign($id)
    {
        $design = Design::findOrFail($id);
        return response()->download($design->PATH_IMG.'/'.$design->image);
    }

    public function confirm($id)
    {
        $ads = Ads::findOrFail($id);
        $ads->status = Ads::S_PAID;
        $ads->save();
        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
