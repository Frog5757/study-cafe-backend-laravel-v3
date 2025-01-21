<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Fetch all subjects.
     */
    public function index()
    {
        $units = Unit::all();
        return response()->json($units);
    }
}