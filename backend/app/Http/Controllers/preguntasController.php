<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class preguntasController extends Controller
{
    public function savePreguntas(Request $request){
        $preguntas = preguntas::create($request->all());
        return response()->json($preguntas,200);
    }
    public function getPreguntas(){
        $preguntas = preguntas::all();
        return response()->json($preguntas,200);
    }
    public function getPreguntasById($id){
        $preguntas = preguntas::find($id);
        if(!$preguntas){
            return response()->json(['message' => 'Pregunta no encontrada'], 404);
        }
        return response()->json($preguntas, 200);
    }
    public function deletePreguntas($id){
        $preguntas = preguntas::find($id);
        if(!$preguntas){
            return response()->json(['message' => 'Pregunta no encontrada'], 404);
        }
        $preguntas->delete();
        return response()->json(['message' => 'Pregunta eliminada'], 200);
    }
    public function updatePreguntas(Request $request, $id){
        $preguntas = preguntas::find($id);
        if(!$preguntas){
            return response()->json(['message' => 'Pregunta no encontrada'], 404);
        }
        $preguntas->update($request->all());
        return response()->json($preguntas, 200);
    }
}
