<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // akses data periode
        $periode = Periode::all();

        // dumb data
        // kirim data ke view
        // return view('fakultas.index') --> with ('fakultas', $result);
        // atau compant
        return view('Periode.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //validasi data 
        //    dd($request);
        $input = $request->validate([
            'nama'=>'required|unique:fakultas',
            'Singkatan'=> 'required',
            'dekan'=> 'required'
        ]);


        //simpan data ke tabel fakultas
        Fakultas::create($input);

        //redirect ke halaman index fakultas
        return redirect()->route('fakultas.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakultas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakultas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakultas)
    {
        //
    }
}
