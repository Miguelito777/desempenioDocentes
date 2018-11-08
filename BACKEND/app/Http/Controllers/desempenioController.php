<?php

namespace App\Http\Controllers;

use App\TcAspectoTecnico;
use App\TcTipoAspectoTecnico;
use App\TtTecnicoDocente;
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
    public function createAspectos(Request $request)
    {
        $aspectosCreados = array();
        foreach ($request as $aspectoTecnico) {
            $aspecto = $aspectoTecnico;//TcAspectoTecnico::create($aspectoTecnico);
            array_push($aspectosCreados, $aspecto);
        }
        //$aspecto = TtTecnicoDocente::create($request->all());

        return response()->json($aspectosCreados, 201);
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