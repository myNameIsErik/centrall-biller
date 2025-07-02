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
            'kategori' => 'required|string',
            'verifikasi' => 'required|string',
            'tipe_usaha' => 'required|string',
            'no_hp_perusahaan' => 'required|string',
            'provinsi' => 'required|string',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'alamat' => 'required|string',
            'email_perusahaan' => 'required|email',
            'jumlah_produk' => 'required|integer',
            'rating_mean' => 'nullable|numeric',
            'deposit' => 'required|numeric',

            // File fields
            'ektp_penanggung_jawab' => 'nullable|file',
            'akte_pendirian' => 'nullable|file',
            'npwp' => 'nullable|file',
            'akte_perubahan_terakhir' => 'nullable|file',
            'izin_usaha' => 'nullable|file',
            'izin_lokasi' => 'nullable|file',
            'surat_kuasa' => 'nullable|file',
            'nib' => 'nullable|file',
        ]);

        // Upload file
        $filePaths = [];
        foreach (
            [
                'ektp_penanggung_jawab',
                'akte_pendirian',
                'npwp',
                'akte_perubahan_terakhir',
                'izin_usaha',
                'izin_lokasi',
                'surat_kuasa',
                'nib',
            ] as $fileField
        ) {
            if ($request->hasFile($fileField)) {
                $filePaths[$fileField] = $request->file($fileField)->store('dokumen_mitra', 'public');
            }
        }

        // Simpan data
        $perusahaan = Perusahaan::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'kategori' => $request->kategori,
            'verifikasi' => $request->verifikasi,
            'tipe_usaha' => $request->tipe_usaha,
            'no_hp_perusahaan' => $request->no_hp_perusahaan,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'alamat' => $request->alamat,
            'email_perusahaan' => $request->email_perusahaan,
            'jumlah_produk' => $request->jumlah_produk,
            'rating_mean' => $request->rating_mean ?? 0,
            'deposit' => $request->deposit,

            // File uploads
            'ektp_penanggung_jawab' => $filePaths['ektp_penanggung_jawab'] ?? null,
            'akte_pendirian' => $filePaths['akte_pendirian'] ?? null,
            'npwp' => $filePaths['npwp'] ?? null,
            'akte_perubahan_terakhir' => $filePaths['akte_perubahan_terakhir'] ?? null,
            'izin_usaha' => $filePaths['izin_usaha'] ?? null,
            'izin_lokasi' => $filePaths['izin_lokasi'] ?? null,
            'surat_kuasa' => $filePaths['surat_kuasa'] ?? null,
            'nib' => $filePaths['nib'] ?? null,
        ]);

        return redirect('/partner')->with('success', 'Partner Mitra berhasil ditambahkan.');
    }

    public function verifikasi($id)
    {
        $mitra = Perusahaan::findOrFail($id);
        $mitra->verifikasi = 'verified';

        $mitra->save();
        // dd($mitra->verifikasi);

        return redirect('/partner')->with('success', 'Status Partner Mitra berhasil diubah.');
    }

    public function updatePartner(Request $request, $id)
    {
        $mitra = Perusahaan::findOrFail($id);

        $data = $request->except(['_token', '_method']);

        // handle file upload
        foreach (
            [
                'ektp_penanggung_jawab',
                'akte_pendirian',
                'npwp',
                'akte_perubahan_terakhir',
                'izin_usaha',
                'izin_lokasi',
                'surat_kuasa',
                'nib',
            ] as $fileField
        ) {
            if ($request->hasFile($fileField)) {
                $data[$fileField] = $request->file($fileField)->store('dokumen_mitra', 'public');
            }
        }

        $mitra->update($data);

        return redirect('/partner')->with('success', 'Data mitra berhasil diperbarui.');
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
