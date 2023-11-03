<?php

namespace App\Http\Controllers;


use App\Models\Rak;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $buku = Buku::all();
        return view('buku.index', compact('buku'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Rak $rak)
    {
        //
        $raks = $rak->all();
        return view('buku.create', compact('raks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Buku $buku)
    {
        //
        $request->validate([
            'kode_buku' => 'required',
            'rak_id' => 'required',
            'judul_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit_buku' => 'required',
            'tahun_penerbit' => 'required',
            'stok_buku' => 'required',
        ]);

        $buku::create([
            'kode_buku' => $request['kode_buku'],
            'rak_id' => $request['rak_id'],
            'judul_buku' => $request['judul_buku'],
            'penulis_buku' => $request['penulis_buku'],
            'penerbit_buku' => $request['penerbit_buku'],
            'tahun_penerbit' => $request['tahun_penerbit'],
            'stok_buku' => $request['stok_buku'],
        ]); 

        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku = Buku::where('id', $buku->id)->delete();
        return redirect()->route('buku.index');
    }
}
