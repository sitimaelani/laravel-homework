<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Petugas;
use App\Models\Pengembalian;


use Illuminate\Http\Request;


class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengembalian = Pengembalian::all();
        return view('pengembalian.index', compact('pengembalian'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Anggota $anggota, Buku $buku, Petugas $petugas)
    {
        $anggota = Anggota::select('id', 'nama_anggota')->get();
        $buku = Buku::select('id', 'judul_buku')->get();
        $petugas = Petugas::select('id', 'nama_petugas')->get();
        return view('pengembalian.create', compact('anggota', 'buku', 'petugas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_pengembalian' => 'required',
            'denda' => 'required',
        ]);

        $pengembalian = new Pengembalian;
        $pengembalian->id_anggota = $request->id_anggota;
        $pengembalian->id_buku = $request->id_buku;
        $pengembalian->id_petugas = $request->id_petugas;
        $pengembalian->tanggal_pengembalian = $request->tanggal_pengembalian;
        $pengembalian->denda = $request->denda;
        $pengembalian->save();

        return redirect()->route('pengembalian.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
