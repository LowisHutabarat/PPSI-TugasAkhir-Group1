<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
class CeritaSuksesController extends Controller
{
    public function index()
    {
        $alumni = Alumni::all(); // Ambil semua data alumni dari database
        return view('dashboard.ceritaSukses', compact('alumni'));
    }
}
