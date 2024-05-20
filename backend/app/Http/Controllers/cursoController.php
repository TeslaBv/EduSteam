<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursoController extends Controller
{
    public function saveCurso(Request $request){
        $curso = curso::create($request->all());
        return response()->json($curso,200);
    }
    public function getCursos(){
        $cursos = curso::all();
        return response()->json($cursos,200);
    }
    public function getCurso($id){
        $curso = curso::find($id);
        if(!$curso){
            return response()->json(['message' => 'Curso no encontrado'], 404);
        }
        return response()->json($curso, 200);
    }
    public function deleteCurso($id){
        $curso = curso::find($id);
        if(!$curso){
            return response()->json(['message' => 'Curso no encontrado'], 404);
        }
        $curso->delete();
        return response()->json(['message' => 'Curso eliminado'], 200);
    }
    public function updateCurso(Request $request, $id){
        $curso = curso::find($id);
        if(!$curso){
            return response()->json(['message' => 'Curso no encontrado'], 404);
        }
        $curso->update($request->all());
        return response()->json($curso, 200);
    }
}
