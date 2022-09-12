<?php

namespace App\Http\Controllers;

use App\Models\Shipper;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Shipper  $shipper
     * @return \Illuminate\Http\Response
     */
    public function show(Shipper $shipper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shipper  $shipper
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $shippers = Shipper::findOrFail($id);
        return view('shippers.edit',compact('shippers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shipper  $shipper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shipper $shipper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shipper  $shipper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipper $shipper)
    {
        //
    }
}
