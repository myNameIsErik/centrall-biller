<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email',
            'no_hp' => 'nullable|string|max:15',
            'role' => 'required|string|max:20',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'role' => $request->role,
            'password' => Hash::make('password123'), // default password
        ]);

        return redirect('/user')->with('success', 'User berhasil ditambahkan.');
    }

    public function storePartner(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'kategori' => 'nullable|string',
            'verifikasi' => 'nullable|string',
            'tipe_usaha' => 'nullable|string',
            'no_hp_perusahaan' => 'nullable|string|max:20',
            'provinsi' => 'nullable|string|max:100',
            'kabupaten' => 'nullable|string|max:100',
            'kecamatan' => 'nullable|string|max:100',
            'alamat' => 'nullable|string',
            'ektp_penanggung_jawab' => 'nullable|string',
            'akte_pendirian' => 'nullable|string',
            'npwp' => 'nullable|string',
            'akte_perubahan_terakhir' => 'nullable|string',
            'izin_usaha' => 'nullable|string',
            'izin_lokasi' => 'nullable|string',
            'surat_kuasa' => 'nullable|string',
            'nib' => 'nullable|string',
            'email_perusahaan' => 'nullable|email',
            'jumlah_produk' => 'nullable|integer',
            'rating_mean' => 'nullable|numeric',
            'deposit' => 'nullable|numeric',
        ]);

        Perusahaan::create($request->all());

        return redirect('/partner')->with('success', 'Partner Mitra berhasil ditambahkan.');
    }

    public function storeRole(Request $request)
    {
        $request->validate([
            'nama_role' => 'required|string|max:20',
        ]);

        Role::create([
            'nama_role' => $request->nama_role,
        ]);

        return redirect('/role')->with('success', 'Role berhasil ditambahkan.');
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
