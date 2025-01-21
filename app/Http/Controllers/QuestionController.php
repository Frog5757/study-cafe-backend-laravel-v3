<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Fetch all questions.
     */
    public function index()
    {
        $questions = Question::all();
        return response()->json($questions);
    }
}
