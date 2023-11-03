<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Anggota::all();
        return view('anggota.index', compact('members'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode_anggota' => 'required',
            'nama_anggota' => 'required',
            'jk_anggota' => 'required',
            'jurusan_anggota' => 'required',
            'no_telpon' => 'required',
            'alamat_anggota' => 'required',
        ]);

        $members = new Anggota;
        $members->kode_anggota = $request->kode_anggota;
        $members->nama_anggota = $request->nama_anggota;
        $members->jk_anggota = $request->jk_anggota;
        $members->jurusan_anggota = $request->jurusan_anggota;
        $members->no_telpon = $request->no_telpon;
        $members->alamat_anggota = $request->alamat_anggota;
        $members->save();

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $members)
    {
        return view('anggota.show', compact('members'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $members)
    {
        return view('anggota.edit', compact('members'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $members)
    {
        //
        $request->validate([
            'kode_anggota' => 'required',
            'nama_anggota' => 'required',
            'jk_anggota' => 'required',
            'jurusan_anggota' => 'required',
            'no_telpon' => 'required',
            'alamat_anggota' => 'required',
        ]);

        $members->update($request->all());

        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $members)
    {
        $members->delete();
        return redirect()->route('anggota.index');
    }
}
