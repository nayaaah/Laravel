<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): void
    {
        // akses model Fakultas
        $fakultas = Fakultas::all(); //seperti select * from fakultas di basisdata
        //dd($fakultas);
        return view('fakultas.index')->with('fakultas', $fakultas); //ingin menampilkan isi dari tabel fakultas ke view fakultas
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage. Untuk menyimpan tabel dalam database
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource. Untuk menampilkan detail dari fakultas
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
