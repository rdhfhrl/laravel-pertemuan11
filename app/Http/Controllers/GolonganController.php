<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Golongan;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Golongan::all();
        return view('Golongan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Golongan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'gol_kode' => 'bail|required|unique:tb_golongan',
        'gol_nama' => 'required'
    ],
    [
        'gol_kode.required' => 'Kode Golongan wajib diisi',
        'gol_kode.unique' => 'Kode Golongan sudah ada',
        'gol_nama.required' => 'Nama Golongan wajib diisi'
    ]);

    Golongan::create([
        'gol_kode' => $request->gol_kode,
        'gol_nama' => $request->gol_nama,
    ]);

    return redirect('golongan');
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
        $row = Golongan::findOrFail($id);
        return view('golongan.edit', compact('row'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'gol_kode' => 'bail|required',
            'gol_nama' => 'required'
        ],
        [
            'gol_kode.required' => 'Kode Golongan wajib diisi',
            'gol_nama.required' => 'Nama Golongan wajib diisi'
        ]);
    
        $row = Golongan::findOrFail($id);
        $row->update([
            'gol_kode' => $request->gol_kode,
            'gol_nama' => $request->gol_nama,
        ]);
    
        return redirect('golongan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Golongan::findOrFail($id);
        $row->delete();

        return redirect('golongan');
    }
}
