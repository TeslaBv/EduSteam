<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class quizController extends Controller
{
    public function saveQuiz(Request $request){
        $quiz = quiz::create($request->all());
        return response()->json($quiz,200);
    }
    public function getQuizzes(){
        $quizzes = quiz::all();
        return response()->json($quizzes,200);
    }
    public function getQuiz($id){
        $quiz = quiz::find($id);
        if(!$quiz){
            return response()->json(['message' => 'Quiz no encontrado'], 404);
        }
        return response()->json($quiz, 200);
    }
    public function deleteQuiz($id){
        $quiz = quiz::find($id);
        if(!$quiz){
            return response()->json(['message' => 'Quiz no encontrado'], 404);
        }
        $quiz->delete();
        return response()->json(['message' => 'Quiz eliminado'], 200);
    }
    public function updateQuiz(Request $request, $id){
        $quiz = quiz::find($id);
        if(!$quiz){
            return response()->json(['message' => 'Quiz no encontrado'], 404);
        }
        $quiz->update($request->all());
        return response()->json(['message' => 'Quiz actualizado'], 200);
    }
}
