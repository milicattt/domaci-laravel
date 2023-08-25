<?php

namespace App\Http\Controllers;

use App\Http\Resources\KategorijaResource;
use App\Models\Kategorija;
use Illuminate\Http\Request;

class KategorijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategorije=Kategorija::all();
        return KategorijaResource::collection($kategorije);
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
     * @param  \App\Models\Kategorija  $kategorija
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorija $kategorija)
    {
        // $kategorija=Kategorija::find($kategorija_id);
        // if(is_null($kategorija)){
        //     return response()->json('Kategorija nije pronadjena',404);
        // }
        // return response()->json($kategorija);

        return new KategorijaResource($kategorija);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategorija  $kategorija
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategorija $kategorija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategorija  $kategorija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategorija $kategorija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategorija  $kategorija
     * @return \Illuminate\Http\Response
     */
    public function destroy( $kategorija_id)
    {
        // $kategorija= Kategorija::find($kategorija_id);
        // if(is_null($kategorija)){
        //     return response()->json('Kategorija nije pronadjena',404);
        // }
        // $kategorija->delete();
        // return response()->json('Kategorija je obrisana');

        Kategorija::destroy($kategorija_id);
        return response()->json('Kategorija je uspesno obrisana!');
    }
}
