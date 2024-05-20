<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class actividadController extends Controller
{
    public function saveActividad(Request $request){
        $actividad = actividad::create($request->all());
        return response()->json($actividad,200);
    }

    public function getActividades(){
        $actividades = actividad::all();
        return response()->json($actividades,200);
    }

    public function getActividad($id){
        $actividad = actividad::find($id);
        if(!$actividad){
            return response()->json(['message' => 'Actividad no encontrada'], 404);
        }
        return response()->json($actividad, 200);
    }

    public function deleteActividad($id){
        $actividad = actividad::find($id);
        if(!$actividad){
            return response()->json(['message' => 'Actividad no encontrada'], 404);
        }
        $actividad->delete();
        return response()->json(['message' => 'Actividad eliminada'], 200);
    }

    public function updateActividad(Request $request, $id){
        $actividad = actividad::find($id);
        if(!$actividad){
            return response()->json(['message' => 'Actividad no encontrada'], 404);
        }
        $actividad->update($request->all());
        return response()->json($actividad, 200);
    }
}
