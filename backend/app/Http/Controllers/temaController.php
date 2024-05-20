<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class temaController extends Controller
{
    public function saveTema(Request $request){
        $tema = tema::create($request->all());
        return response()->json($tema,200);
    }

    public function getTemas(){
        $temas = tema::all();
        return response()->json($temas,200);
    }

    public function getTema($id){
        $tema = tema::find($id);
        if(!$tema){
            return response()->json(['message' => 'Tema no encontrado'], 404);
        }
        return response()->json($tema, 200);
    }

    public function deleteTema($id){
        $tema = tema::find($id);
        if(!$tema){
            return response()->json(['message' => 'Tema no encontrado'], 404);
        }
        $tema->delete();
        return response()->json(['message' => 'Tema eliminado'], 200);
    }

    public function updateTema(Request $request, $id){
        $tema = tema::find($id);
        if(!$tema){
            return response()->json(['message' => 'Tema no encontrado'], 404);
        }
        $tema->update($request->all());
        return response()->json($tema, 200);
    }
}
