<?php

namespace App\Http\Controllers\Master;

use App\Models\Ads;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_date = date('Y-m-d');
        $last_week = date('Y-m-d', strtotime("-1 week", strtotime($current_date)));
        $total = Ads::count();
        $total_inquiry = Ads::whereRaw("(DATE_FORMAT(created_at,'%Y%c%d') BETWEEN DATE_FORMAT('$last_week','%Y%c%d') AND DATE_FORMAT('$current_date','%Y%c%d'))")->count();
        $total_sales = Ads::select(DB::raw("sum(total) as total_sales"))
            ->whereRaw("(DATE_FORMAT(created_at,'%Y%c%d') BETWEEN DATE_FORMAT('$last_week','%Y%c%d') AND DATE_FORMAT('$current_date','%Y%c%d')) AND status='2'")
            ->first();
        $total_paid = Ads::where('status','2')->count();
        $last_ads = Ads::orderBy('created_at','DESC')
            ->limit(5)
            ->get();

        return view('master.dashboard.index',[
            'total'=>$total,
            'total_inquiry'=>$total_inquiry,
            'total_sales'=>$total_sales->total_sales,
            'total_paid'=>$total_paid,
            'last_ads'=>$last_ads
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
