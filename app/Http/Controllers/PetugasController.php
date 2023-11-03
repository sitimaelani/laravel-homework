<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Petugas;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $operators= Petugas::all();
        return view('petugas.index', compact('operators'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_petugas' => 'required',
            'jabatan' => 'required',
            'no_telpon' => 'required',
            'alamat_petugas' => 'required',
        ]);

        $query = DB::table('operators')->insert([
            'nama_petugas' => $request['nama_petugas'],
            'jabatan' => $request['jabatan'],
            'no_telpon' => $request['no_telpon'],
            'alamat_petugas' => $request['alamat_petugas'],
        ]);

        return redirect('/petugas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $operators = DB::table('operators')->where('id', $id)->get();
        return view('petugas.show', compact('operators'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $operators = DB::table('operators')->where('id', $id)->get();
        return view('petugas.edit', compact('operators'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama_petugas' => 'required',
            'jabatan' => 'required',
            'no_telpon' => 'required',
            'alamat_petugas' => 'required',
        ]);

        $query = DB::table('operators')->where('id', $id)->update([
            'nama_petugas' => $request['nama_petugas'],
            'jabatan' => $request['jabatan'],
            'no_telpon' => $request['no_telpon'],
            'alamat_petugas' => $request['alamat_petugas'],
        ]);

        return redirect()->route('petugas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('operators')->where('id', $id)->delete();
        return redirect()->route('petugas.index');
    }
}
