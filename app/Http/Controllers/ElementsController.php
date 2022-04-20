<?php

namespace App\Http\Controllers;

use App\Models\Elements;
use App\Http\Requests\StoreElementsRequest;
use App\Http\Requests\UpdateElementsRequest;

class ElementsController extends Controller
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
     * @param  \App\Http\Requests\StoreElementsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreElementsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Elements  $elements
     * @return \Illuminate\Http\Response
     */
    public function show(Elements $elements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Elements  $elements
     * @return \Illuminate\Http\Response
     */
    public function edit(Elements $elements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateElementsRequest  $request
     * @param  \App\Models\Elements  $elements
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateElementsRequest $request, Elements $elements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Elements  $elements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Elements $elements)
    {
        //
    }
}
