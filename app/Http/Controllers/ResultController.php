<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Fetch all questions.
     */
    public function store(Request $request)
    {
        $userId = auth()->user()->id;
        $result = Result::create([
            'user_id' => $userId,
            'no_messages' => json_encode($request->no_messages),
        ]);

        return response()->json([
            'message' => '診断結果が保存されました。',
            'result' => $result
        ]);
    }
    public function index(Request $request)
    {
        $userId = auth()->user()->id;
        $results = Result::where('user_id', $userId)->get();
        return response()->json([
            'results' => $results,
        ]);
    }
}
