<?php

namespace App\Http\Controllers;

use App\TtMadre;
use Illuminate\Http\Request;

class MadreController extends Controller
{

    public function showAllMadre()
    {
        return response()->json(TtMadre::all());
    }

    public function showOneMadre($id)
    {
        return response()->json(TtMadre::find($id));
    }

    public function create(Request $request)
    {
        $Madre = TtMadre::create($request->all());

        return response()->json($Madre, 201);
    }

    public function update($id, Request $request)
    {
        $Madre = TtMadre::findOrFail($id);
        $Madre->update($request->all());

        return response()->json($Madre, 200);
    }

    public function delete($id)
    {
        TtMadre::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
    /*public function showAllCongeladores($id)
    {
        return response()->json(TcAlmacen::find($id)->Congeladores);
    }*/
    
}