<?php

namespace App\Http\Controllers;

use App\TcAspectoTecnico;
use App\TcTipoAspectoTecnico;
use App\TcTipoAspectoActitudinal;
use App\TtTecnicoDocente;
use App\TcActitudinalDocente;
use App\TcDocente;

use Illuminate\Http\Request;

class desempenioController extends Controller
{
    public function getAspectosTecnicos()
    {
        return response()->json(TcAspectoTecnico::all());
    }
    public function getTipoAspecTecWithAspect()
    {
        $TiposAspectosTecnicos = TcTipoAspectoTecnico::all();
        foreach ($TiposAspectosTecnicos as $tipoAspectoTecnicos) {
            $tipoAspectoTecnicos->AspectosTecnicos;
        }
        return response()->json($TiposAspectosTecnicos);
    }
    public function createAspectoDocente(Request $request)
    {
        $aspecto = TtTecnicoDocente::create($request->all());

        return response()->json($aspecto, 201);
    }
    public function createTipoAspectoTecnico(Request $request)
    {
        $tipoAspecto = TcTipoAspectoTecnico::create($request->all());

        return response()->json($tipoAspecto, 201);
    }
    public function createAspectoTecnico(Request $request)
    {
        $aspecto = TcAspectoTecnico::create($request->all());

        return response()->json($aspecto, 201);
    }
    public function getDocentes()
    {
        return response()->json(TcDocente::all());
    }

    public function createTipoAspectoActitudinal(Request $request)
    {
        $aspecto = TcTipoAspectoActitudinal::create($request->all());

        return response()->json($aspecto, 201);
    }
    public function getTiposAspectosActitudinales()
    {
        return response()->json(TcTipoAspectoActitudinal::all());
    }

    public function createAspectoActitudinal(Request $request)
    {
        $aspecto = TcActitudinalDocente::create($request->all());

        return response()->json($aspecto, 201);
    }



    /*public function showAllAlmacen()
    {
        return response()->json(TcAlmacen::all());
    }

    public function showOneAlmacen($id)
    {
        return response()->json(TcAlmacen::find($id));
    }

    public function create(Request $request)
    {
        $Almacen = TcAlmacen::create($request->all());

        return response()->json($Almacen, 201);
    }

    public function update($id, Request $request)
    {
        $Almacen = TcAlmacen::findOrFail($id);
        $Almacen->update($request->all());

        return response()->json($Almacen, 200);
    }

    public function delete($id)
    {
        TcAlmacen::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
    public function showAllCongeladores($id)
    {
        return response()->json(TcAlmacen::find($id)->Congeladores);
    }*/
    
}