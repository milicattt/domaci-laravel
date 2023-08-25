<?php

namespace App\Http\Controllers;

use App\Http\Resources\BrendResource;
use App\Models\Brend;
use Illuminate\Http\Request;

class BrendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brendovi=Brend::all();
        return BrendResource::collection($brendovi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Brend::factory()->create();
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
     * @param  \App\Models\Brend  $brend
     * @return \Illuminate\Http\Response
     */
    public function show(Brend $brend)
    {
        return new BrendResource($brend);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brend  $brend
     * @return \Illuminate\Http\Response
     */
    public function edit(Brend $brend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brend  $brend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brend $brend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brend  $brend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brend $brend_id)
    {
        $brend= Brend::find($brend_id);
        if(is_null($brend)){
            return response()->json('Brend nije pronadjen',404);
        }
        $brend->delete();
        return response()->json('Brend je obrisan');
    }
}
