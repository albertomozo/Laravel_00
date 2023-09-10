<?php

namespace App\Http\Controllers;

use App\Models\All;
use App\Http\Requests\StoreAllRequest;
use App\Http\Requests\UpdateAllRequest;

class AllController extends Controller
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
     * @param  \App\Http\Requests\StoreAllRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAllRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\All  $all
     * @return \Illuminate\Http\Response
     */
    public function show(All $all)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\All  $all
     * @return \Illuminate\Http\Response
     */
    public function edit(All $all)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAllRequest  $request
     * @param  \App\Models\All  $all
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAllRequest $request, All $all)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\All  $all
     * @return \Illuminate\Http\Response
     */
    public function destroy(All $all)
    {
        //
    }
}
