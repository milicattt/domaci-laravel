<?php

namespace App\Http\Controllers;

use App\Http\Resources\PatikaResource;
use App\Models\Patika;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PatikaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patike=Patika::all();
        return PatikaResource::collection($patike);
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
     * @param  \App\Models\Patika  $patika
     * @return \Illuminate\Http\Response
     */
    public function show(Patika $patika)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patika  $patika
     * @return \Illuminate\Http\Response
     */
    public function edit(Patika $patika)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patika  $patika
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patika $patika)
    {
        $validator=Validator::make($request->all(),[
            'brend_id'=>'required',
            'user_id' => 'required',
            'ime'=>'required|string|max:255',
            'url_slike'=>'required|string|max:100',
            'opis'=>'required|string',
            'cena'=>'required'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }
        
        $patika->brend_id = $request->brend_id;
        $patika->user_id = $request->user_id;
        $patika->ime=$request->ime;
        $patika->url_slike=$request->url_slike;
        $patika->opis=$request->opis;
        $patika->cena=$request->cena;

        
        $patika->save();
        return response()->json(['Patika je azurirana',
        new PatikaResource($patika)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patika  $patika
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Patika $patika_id)
    // {
    //     $pr= Patika::find($patika_id);
    //     if(is_null($pr)){
    //         return response()->json('Patika nije nadjen',404);
    //     }
    //     $pr->delete();
    //     return response()->json('Patika je obrisan');
    // }

    public function destroy($patika_id)
    {
        Patika::destroy($patika_id);
        return response()->json('Patika je obrisana uspesno!');
    }
}
