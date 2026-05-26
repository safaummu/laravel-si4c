<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahMahasiswa = DB::select('SELECT p.nama_prodi, COUNT(*) as jumlah 
        FROM laravel.mahasiswas m 
        JOIN laravel.prodis p 
        on m.prodi_id = p.id 
        GROUP BY p.nama_prodi');
        return view('dashboard.index', compact('jumlahMahasiswa'));
    }
}
