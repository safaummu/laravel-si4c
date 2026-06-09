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
    $grafikmhs = DB::select("SELECT prodis.nama_prodi, 
        COUNT(*) as jumlah_mhs 
        FROM mahasiswas
        JOIN prodis 
        ON mahasiswas.prodi_id = prodis.id
        GROUP BY prodis.nama_prodi");

        return view('dashboard-adminlte', compact('grafikmhs'));

        // $jumlahAngkatan = DB::select("SELECT CONCAT('20', SUBSTRING(npm, 1, 2)) as tahun_angkatan, COUNT(*) as jumlah 
        // FROM laravel.mahasiswas 
        // GROUP BY tahun_angkatan
        // ORDER BY tahun_angkatan ASC");

        // return view('dashboard.index', compact('jumlahMahasiswa', 'jumlahAngkatan'));
    }
    
}
