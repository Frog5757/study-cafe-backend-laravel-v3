<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::get('/', function () {
//     $user = auth()->loginUsingId(1);
//     $token = $user->createToken('test');
//     dd($token);
// });
// Route::post('/result', [ResultController::class, 'store'])->middleware('auth:sanctum');
Route::post('/register', [UserController::class, 'store']);
Route::post('/login', [LoginController::class, 'login']);
Route::middleware('auth:sanctum')->post('/result', [ResultController::class, 'store']);
Route::middleware('auth:sanctum')->post('/logout', function (Request $request) {
    $request->user()->currentAccessToken()->delete();
    return response()->json(['message' => 'Logged out successfully']);
});
Route::get('/subjects', [SubjectController::class, 'index']);
Route::get('/units', [UnitController::class, 'index']);
Route::get('/questions', [QuestionController::class, 'index']);
Route::middleware('auth:sanctum')->get('/results', [ResultController::class, 'index']);
Route::middleware('auth:sanctum')->delete('/results/{id}', [ResultController::class, 'destroy']);