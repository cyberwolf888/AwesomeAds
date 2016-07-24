<?php

namespace App\Http\Controllers\Master;

use App\Models\AdsType;
use App\Models\Price;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $price = Price::with('ads_type')->get();
        return view('master.price.index',['price'=>$price]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $price = new Price();
        $ad_type = new AdsType();
        return view('master.price.form',['price'=>$price,'ad_type'=>$ad_type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $price = new Price();
        $ad_type = new AdsType();
        $ad_type->label = $request->label;
        $ad_type->description = $request->description;
        if($ad_type->save()){
            $price->type = $ad_type->id;
            $price->price = $request->price;
            $price->based = 'WC';
            if($price->save()){
                return redirect()->route('master.price.index');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $price = Price::findOrFail($id);
        $ad_type = AdsType::findOrFail($price->type);
        return view('master.price.form',['price'=>$price,'ad_type'=>$ad_type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $price = Price::findOrFail($id);
        $ad_type = AdsType::findOrFail($price->type);
        $ad_type->label = $request->label;
        $ad_type->description = $request->description;
        if($ad_type->save()){
            $price->type = $ad_type->id;
            $price->price = $request->price;
            $price->based = 'WC';
            if($price->save()){
                return redirect()->route('master.price.index');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $price = Price::findOrFail($id);
        $ad_type = AdsType::findOrFail($price->type);

        $price->delete();
        $ad_type->delete();

        return redirect()->back();
    }
}
