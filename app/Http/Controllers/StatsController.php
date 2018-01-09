<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;
class StatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getApi()
    {
            $days = Input::get('days', 7);
 
          $range = \Carbon\Carbon::now()->subMonths($days);

           // $stats = DB::table('orders')
           //  ->where('created_at', '>=', $range)
           //  ->groupBy('created_at')
           //  ->orderBy('created_at', 'ASC') // Cache the data for 24 hours
           //  ->get([
           //      DB::raw('created_at as "Date" '),
           //      DB::raw('COUNT(*) as "value"')
           //  ]);

          $stats = DB::table('orders')
            ->where('created_at', '>=', $range)
            ->groupBy("to_char(created_at, 'Month')")
            ->orderBy("to_char(created_at, 'Month')", 'DESC')
            ->get([
                DB::raw(" to_char(created_at, 'Month') as \"date\" "),
                DB::raw('COUNT(*) as "value"')
            ]);
                   

          return $stats;
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
