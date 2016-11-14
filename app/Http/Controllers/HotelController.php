<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // Sin cache
        //$hoteles = \App\Models\Hotel::get();

        // Con cache Retrieve & Store en manual Laravel 5.3
        $hoteles = Cache::remember('hoteles', 1, function () {
            return DB::table('hoteles')->get();
        });

        return response()->json([
                "msg" => "Success",
                "hoteles" => $hoteles->toArray()
            ], 200
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hotel = new \App\Models\Hotel();
        $hotel->name = $request->name;
        $hotel->starts = $request->starts;
        $hotel->price = $request->price;
        $hotel->save();

        return response()->json([
                "msg" => "Success",
                "id" => $hotel->id
            ], 200
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       $hotel = \App\Models\Hotel::find($id);
        return response()->json([
                "msg" => "Success",
                "hotel" => $hotel
            ], 200
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hotel = \App\Models\Hotel::find($id);
        $hotel->name = $request->name;
        $hotel->starts = $request->starts;
        $hotel->price = $request->price;
        $hotel->save();

        return response()->json([
                "msg" => "Success",
            ], 200
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = \App\Models\Hotel::find($id);
        $hotel->delete();

        return response()->json([
                "msg" => "Success",
            ], 200
        );
    }
}
