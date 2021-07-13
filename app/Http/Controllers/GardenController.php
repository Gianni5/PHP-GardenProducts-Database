<?php

namespace App\Http\Controllers;

use App\Models\Garden;
use Illuminate\Http\Request;

class GardenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::all();
        return view('GardenWeb.index');
        //return view('GardenWeb.createaccount');
        //return view('GardenWeb.inspiration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('GardenWeb.createaccount');
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
     * @param  \App\Models\Garden  $garden
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Garden $garden)
    {
        return view('GardenWeb.products');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Garden  $garden
     * @return \Illuminate\Http\Response
     */
    public function edit(Garden $garden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Garden  $garden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garden $garden)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Garden  $garden
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garden $garden)
    {
        //
    }
}
