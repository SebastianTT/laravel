<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notas;

class NotasController extends Controller
{
    function listar_notas(){
        return Notas::all();
    }

    function agregar_nota(Request $request){
            $nota = new Notas;
            $nota->nombre = $request->nombre;
            $nota->descripcion = $request->descripcion;
            $nota->save();
            return "Se creo la nota";
    }

    function buscar_nota($id){
        $nota = new Notas;
        $coleccion = $nota::find($id);
        $coleccion->save();
        return $coleccion;
    }

    function eliminar_nota($id){
        $nota = new Notas;
        $coleccion = $nota::find($id);
        $coleccion->delete();
        return "Se eliminó con éxito";
    }

    function editar_nota(Request $request){
        $nota = new Notas;
        $nota = $nota::find($request->id);
        $nota -> nombre = $request->nombre;
        $nota -> descripcion = $request->descripcion;
        $nota->save();
        return "Se actualizó con éxito";
    }


    //
}
