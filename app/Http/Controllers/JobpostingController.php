<?php

namespace App\Http\Controllers;

use App\Models\Jobposting;
use Illuminate\Http\Request;

class JobpostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('job_posting.index');
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
     * @param  \App\Models\Jobposting  $jobposting
     * @return \Illuminate\Http\Response
     */
    public function show(Jobposting $jobposting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobposting  $jobposting
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobposting $jobposting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobposting  $jobposting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobposting $jobposting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobposting  $jobposting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobposting $jobposting)
    {
        //
    }
}
