<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Fetch all subjects.
     */
    public function index()
    {
        // データベースから全件取得
        $subjects = Subject::all();

        // JSON形式で返す
        return response()->json($subjects);
    }
}
