<?php

namespace App\Http\Controllers;

use App\Models\Ssh;
use App\Http\Requests\StoreSshRequest;
use App\Http\Requests\UpdateSshRequest;

class SshController extends Controller
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
     * @param  \App\Http\Requests\StoreSshRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSshRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ssh  $ssh
     * @return \Illuminate\Http\Response
     */
    public function show(Ssh $ssh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ssh  $ssh
     * @return \Illuminate\Http\Response
     */
    public function edit(Ssh $ssh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSshRequest  $request
     * @param  \App\Models\Ssh  $ssh
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSshRequest $request, Ssh $ssh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ssh  $ssh
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ssh $ssh)
    {
        //
    }
}
