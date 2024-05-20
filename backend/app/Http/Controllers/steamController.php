<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class steamController extends Controller
{
    public function saveSteam(Request $request){
        $steam = steam::create($request->all());
        return response()->json($steam,200);
    }
    public function getSteam(){
        $steam = steam::all();
        return response()->json($steam,200);
    }
    public function getSteamById($id){
        $steam = steam::find($id);
        if(!$steam){
            return response()->json(['message' => 'Steam no encontrado'], 404);
        }
        return response()->json($steam, 200);
    }
    public function deleteSteam($id){
        $steam = steam::find($id);
        if(!$steam){
            return response()->json(['message' => 'Steam no encontrado'], 404);
        }
        $steam->delete();
        return response()->json(['message' => 'Steam eliminado'], 200);
    }
    public function updateSteam(Request $request, $id){
        $steam = steam::find($id);
        if(!$steam){
            return response()->json(['message' => 'Steam no encontrado'], 404);
        }
        $steam->update($request->all());
        return response()->json($steam, 200);
    }
}
