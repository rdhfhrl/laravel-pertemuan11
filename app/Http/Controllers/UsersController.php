<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Users::all();
        return view('Users.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_email' => 'bail|required|unique:tb_users',
            'user_nama' => 'required'
        ],
        [
            'user_email.required' => 'Email Users wajib diisi',
            'user_email.unique' => 'Email Users sudah ada',
            'user_nama.required' => 'Nama Users wajib diisi'
        ]);
    
        Users::create([
            'user_email' => $request->user_email,
            'user_password' => $request->user_password,
            'user_nama' => $request->user_nama,
            'user_alamat' => $request->user_alamat,
            'user_hp' => $request->user_hp,
            'user_pos' => $request->user_pos,
            'user_role' => $request->user_role,
            'user_aktif' => $request->user_aktif,
        ]);
    
        return redirect('users');
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
        $row = Users::findOrFail($id);
        return view('users.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'user_email' => 'bail|required',
            'user_nama' => 'required'
        ],
        [
            'user_email.required' => 'Email Users wajib diisi',
            'user_nama.required' => 'Nama Users wajib diisi'
        ]);
    
        $row = Users::findOrFail($id);
        $row->update([
            'user_email' => $request->user_email,
            'user_password' => $request->user_password,
            'user_nama' => $request->user_nama,
            'user_alamat' => $request->user_alamat,
            'user_hp' => $request->user_hp,
            'user_pos' => $request->user_pos,
            'user_role' => $request->user_role,
            'user_aktif' => $request->user_aktif,
        ]);
    
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Users::findOrFail($id);
        $row->delete();

        return redirect('users');
    }
}
