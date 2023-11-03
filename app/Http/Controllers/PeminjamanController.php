<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Petugas;
use App\Models\Peminjaman;



class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman= Peminjaman::all();
        return view('peminjaman.index', compact('peminjaman'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Anggota $anggota, Buku $buku, Petugas $petugas)
    {
        $anggota = Anggota::select('id', 'nama_anggota')->get();
        $buku = Buku::select('id', 'judul_buku')->get();
        $petugas = Petugas::select('id', 'nama_petugas')->get();
        return view('peminjaman.create', compact('anggota', 'buku', 'petugas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required'
        ]);

        $peminjaman = new Peminjaman;
        $peminjaman->id_anggota = $request->id_anggota;
        $peminjaman->id_buku = $request->id_buku;
        $peminjaman->id_petugas = $request->id_petugas;
        $peminjaman->tanggal_pinjam = $request->tanggal_pinjam;
        $peminjaman->tanggal_kembali = $request->tanggal_kembali;
        $peminjaman->save();

        return redirect()->route('peminjaman.index');


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
