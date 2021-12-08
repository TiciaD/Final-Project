<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDifficultiesRequest;
use App\Http\Requests\UpdateDifficultiesRequest;
use App\Models\Difficulties;

class DifficultiesController extends Controller
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
     * @param  \App\Http\Requests\StoreDifficultiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDifficultiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Difficulties  $difficulties
     * @return \Illuminate\Http\Response
     */
    public function show(Difficulties $difficulties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Difficulties  $difficulties
     * @return \Illuminate\Http\Response
     */
    public function edit(Difficulties $difficulties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDifficultiesRequest  $request
     * @param  \App\Models\Difficulties  $difficulties
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDifficultiesRequest $request, Difficulties $difficulties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Difficulties  $difficulties
     * @return \Illuminate\Http\Response
     */
    public function destroy(Difficulties $difficulties)
    {
        //
    }
}
