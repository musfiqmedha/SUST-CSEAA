<?php

namespace App\Http\Controllers;

use App\Generalmember;
use Illuminate\Http\Request;

class GeneralmemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('general.general');
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
     * @param  \App\Generalmember  $generalmember
     * @return \Illuminate\Http\Response
     */
    public function show(Generalmember $generalmember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Generalmember  $generalmember
     * @return \Illuminate\Http\Response
     */
    public function edit(Generalmember $generalmember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Generalmember  $generalmember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generalmember $generalmember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Generalmember  $generalmember
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generalmember $generalmember)
    {
        //
    }
}
