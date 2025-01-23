<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            $token = $user->createToken('authToken')->plainTextToken
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
           
            return response()->json([
                'token' => $token,
                'user' => $user,
            ]);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}
