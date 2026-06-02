<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $jumlahAngkatan = DB::select("SELECT CONCAT('20', SUBSTRING(npm, 1, 2)) as tahun_angkatan, COUNT(*) as jumlah 
        FROM laravel.mahasiswas 
        GROUP BY tahun_angkatan
        ORDER BY tahun_angkatan ASC");

        return view('dashboard.index', compact('jumlahMahasiswa', 'jumlahAngkatan'));
    }
    
}
