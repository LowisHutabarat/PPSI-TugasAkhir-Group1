<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index()
{
    $durasiDapatKerja = Alumni::whereNotNull('durasi_dapat_kerja')->avg('durasi_dapat_kerja');
    $durasiLulusS1 = Alumni::count();
    $alumniSudahKerja = Alumni::whereNotNull('kerja_dimana')->count();
    $alumniPerusahaanTernama = Alumni::whereIn('kerja_dimana', ['Google', 'Microsoft', 'Facebook'])->count();
    $alumni = Alumni::all(); // Ambil semua data alumni

    return view('dashboard.index', compact(
        'durasiDapatKerja',
        'durasiLulusS1',
        'alumniSudahKerja',
        'alumniPerusahaanTernama',
        'alumni'
    ));
}

}
