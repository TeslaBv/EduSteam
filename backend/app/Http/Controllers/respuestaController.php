<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class respuestaController extends Controller
{
    public function saveRespuesta(Request $request){
        $respuesta = respuesta::create($request->all());
        return response()->json($respuesta,200);
    }
    public function getRespuestas(){
        $respuestas = respuesta::all();
        return response()->json($respuestas,200);
    }
    public function getRespuesta($id){
        $respuesta = respuesta::find($id);
        if(!$respuesta){
            return response()->json(['message' => 'Respuesta no encontrada'], 404);
        }
        return response()->json($respuesta, 200);
    }
    public function deleteRespuesta($id){
        $respuesta = respuesta::find($id);
        if(!$respuesta){
            return response()->json(['message' => 'Respuesta no encontrada'], 404);
        }
        $respuesta->delete();
        return response()->json(['message' => 'Respuesta eliminada'], 200);
    }
    public function updateRespuesta(Request $request, $id){
        $respuesta = respuesta::find($id);
        if(!$respuesta){
            return response()->json(['message' => 'Respuesta no encontrada'], 404);
        }
        $respuesta->update($request->all());
        return response()->json($respuesta, 200);
    }
}
