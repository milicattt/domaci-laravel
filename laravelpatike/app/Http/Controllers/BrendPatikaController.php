<?php

namespace App\Http\Controllers;

use App\Models\Patika;
use Illuminate\Http\Request;

class BrendPatikaController extends Controller
{
    //produkti odredjenog brenda
    
    public function index($brend_id)
    {
        $patike=Patika::get()->where('brend_id',$brend_id);
        if(is_null($patike)){
            return response()->json('Nisu pronadjene takve patike',404);
        }return response()->json($patike);
    }
}
