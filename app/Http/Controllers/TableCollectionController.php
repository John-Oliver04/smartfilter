<?php

namespace App\Http\Controllers;

use App\Models\TableCollection;
use Illuminate\Http\Request;

class TableCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('collections');
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
     * @param  \App\Models\TableCollection  $tableCollection
     * @return \Illuminate\Http\Response
     */
    public function show(TableCollection $tableCollection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TableCollection  $tableCollection
     * @return \Illuminate\Http\Response
     */
    public function edit(TableCollection $tableCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TableCollection  $tableCollection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TableCollection $tableCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TableCollection  $tableCollection
     * @return \Illuminate\Http\Response
     */
    public function destroy(TableCollection $tableCollection)
    {
        //
    }
}
