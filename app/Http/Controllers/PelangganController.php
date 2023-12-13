<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Golongan;
use App\Models\Users;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan::all();
        return view('Pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $golongan = Golongan::all(); 
        $users = Users::all(); 
        return view('Pelanggan.create', compact('golongan', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pel_id_gol' => 'bail|required|exists:tb_golongan,gol_id',
            'pel_id_user' => 'bail|required|exists:tb_users,user_id',
            'pel_no' => 'bail|required|unique:tb_pelanggan',
            'pel_nama' => 'required',
        ],
        [
            'pel_id_gol.required' => 'ID Golongan wajib diisi',
            'pel_id_gol.exists' => 'ID Golongan tidak valid',
            'pel_id_user.required' => 'ID User wajib diisi',
            'pel_id_user.exists' => 'ID User tidak valid',
            'pel_no.required' => 'No Pelanggan wajib diisi',
            'pel_no.unique' => 'No Pelanggan sudah ada',
            'pel_nama.required' => 'Nama Pelanggan wajib diisi',
        ]);
        
        Pelanggan::create([
            'pel_id_gol' => $request->pel_id_gol,
            'pel_no' => $request->pel_no,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_hp' => $request->pel_hp,
            'pel_ktp' => $request->pel_ktp,
            'pel_seri' => $request->pel_seri,
            'pel_meteran' => $request->pel_meteran,
            'pel_aktif' => $request->pel_aktif,
            'pel_id_user' => $request->pel_id_user,
    ]);

        return redirect('pelanggan');
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
        $golongan = Golongan::all(); 
        $users = Users::all(); 
        $row = Pelanggan::findOrFail($id);
        return view('Pelanggan.edit', compact('golongan', 'users', 'row'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'pel_id_gol' => 'bail|required|exists:tb_golongan,gol_id',
            'pel_id_user' => 'bail|required|exists:tb_users,user_id',
            'pel_no' => 'bail|required',
            'pel_nama' => 'required',
        ],
        [
            'pel_id_gol.required' => 'ID Golongan wajib diisi',
            'pel_id_gol.exists' => 'ID Golongan tidak valid',
            'pel_id_user.required' => 'ID User wajib diisi',
            'pel_id_user.exists' => 'ID User tidak valid',
            'pel_no.required' => 'No Pelanggan wajib diisi',
            'pel_no.unique' => 'No Pelanggan sudah ada',
            'pel_nama.required' => 'Nama Pelanggan wajib diisi',
        ]);
        
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($request->all());
    
        return redirect('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->delete();

        return redirect('pelanggan');
    }
}
