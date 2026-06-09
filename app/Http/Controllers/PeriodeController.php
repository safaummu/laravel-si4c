<?php

namespace App\Http\Controllers;

use App\Models\periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //update lagii
    public function index()
    {
        // akses model Periode 
        $result = periode::all(); // select * from periode
        // dd($result);
        return view('periode.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('periode.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi data
        $request->validate([
            'tahun_akademik' => 'required',
            'kode_smt' => 'required',
        ]);

        // simpan data ke database
        Periode::create($request->all());

        // redirect ke halaman index dengan pesan sukses
        return redirect()->route('periode.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(periode $periode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, periode $periode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(periode $periode)
    {
        //
    }
}
