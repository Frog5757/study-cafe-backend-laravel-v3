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
            'no_messages' => $request->no_message,
        ]);

        return response()->json([
            'message' => '診断結果が保存されました。',
            'result' => $result
        ]);
    }
}
