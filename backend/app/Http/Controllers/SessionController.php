<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request)
    {
        // Verificar si el usuario está autenticado
        if ($request->user()) {
            // Obtener los datos del usuario autenticado
            $userData = $request->user();
            // Devolver los datos de sesión en formato JSON
            return response()->json($userData);
        } else {
            // Si el usuario no está autenticado, devolver un mensaje de error
            return response()->json(['error' => 'Usuario no autenticado'], 401);
        }
    }
}
