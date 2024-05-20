<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subtemaController extends Controller
{
    public function saveSubtema(Request $request){
        $subtema = subtema::create($request->all());
        return response()->json($subtema,200);
    }
    public function getSubtemas(){
        $subtemas = subtema::all();
        return response()->json($subtemas,200);
    }

    public function getSubtema($id){
        $subtema = subtema::find($id);
        if(!$subtema){
            return response()->json(['message' => 'Subtema no encontrado'], 404);
        }
        return response()->json($subtema, 200);
    }

    public function deleteSubtema($id){
        $subtema = subtema::find($id);
        if(!$subtema){
            return response()->json(['message' => 'Subtema no encontrado'], 404);
        }
        $subtema->delete();
        return response()->json(['message' => 'Subtema eliminado'], 200);
    }

    public function updateSubtema(Request $request, $id){
        $subtema = subtema::find($id);
        if(!$subtema){
            return response()->json(['message' => 'Subtema no encontrado'], 404);
        }
        $subtema->update($request->all());
        return response()->json($subtema, 200);
    }
}
