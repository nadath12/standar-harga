<?php

namespace App\Http\Controllers;

use App\Models\RequestSsh;
use App\Http\Requests\StoreRequestSshRequest;
use App\Http\Requests\UpdateRequestSshRequest;

class RequestSshController extends Controller
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
     * @param  \App\Http\Requests\StoreRequestSshRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequestSshRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestSsh  $requestSsh
     * @return \Illuminate\Http\Response
     */
    public function show(RequestSsh $requestSsh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestSsh  $requestSsh
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestSsh $requestSsh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequestSshRequest  $request
     * @param  \App\Models\RequestSsh  $requestSsh
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequestSshRequest $request, RequestSsh $requestSsh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestSsh  $requestSsh
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestSsh $requestSsh)
    {
        //
    }
}
