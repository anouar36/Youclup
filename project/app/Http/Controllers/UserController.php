<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quizz;
use App\Models\Question;

class UserController extends Controller
{
    public function index()
    {

        $Quizzs= Quizz::with('questions.reponses')->where('isActive', true)->get();

        $QuizzsArr = $Quizzs->map(function($Quizz){
            return $Quizz->questions->map(function($question){
                return[
                    'q'=>$question->question,
                    'o' => $question->reponses->pluck("reponse")->toArray(),
                ];
            });
        })->flatten(1)->toArray(); 
        
        return view('user.dashboard',compact("QuizzsArr"));
    }
}
