<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Whitelist;
use Illuminate\Http\Request;

class SettingsController extends Controller
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
    public function storeProduct(Request $request)
    {
        $request->validate([
            'supplier' => 'required|string|max:100',
            'kode_produk' => 'required|string|max:100',
            'nama_produk' => 'required|string|max:100',
            'status' => 'required|string|max:100',
            'biaya_sistem' => 'required|string|max:100',
            'harga' => 'required|string|max:100',
            'admin' => 'required|string|max:100',
            'fee' => 'required|string|max:100',
            'kategori' => 'required|string|max:100',
        ]);

        Product::create([
            'supplier' => $request->supplier,
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'status' => $request->status,
            'biaya_sistem' => $request->biaya_sistem,
            'harga' => $request->harga,
            'admin' => $request->admin,
            'fee' => $request->fee,
            'kategori' => $request->kategori,
        ]);

        return redirect('/product')->with('success', 'Product berhasil ditambahkan.');
    }

    public function storeIP(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'allowed_key' => 'required|in:live,demo',
            'whitelist_ips' => 'required|ip',
        ]);

        $data = [
            'user_id' => $request->user_id,
        ];

        // Simpan whitelist_ips ke kolom yang sesuai
        if ($request->allowed_key === 'demo') {
            $data['api_key_sandbox'] = $request->whitelist_ips;
        } else {
            $data['api_key'] = $request->whitelist_ips;
        }

        // Simpan data
        Whitelist::create($data);

        return redirect('/ip')->with('success', 'Whitelist IP berhasil ditambahkan.');
    }

    public function storeType(Request $request)
    {
        $request->validate([
            'kode_supplier' => 'required|string|max:50',
            'nama_supplier' => 'required|string|max:50',
            'url' => 'required|string|max:200',
        ]);

        ProductCategory::create([
            'kode_supplier' => $request->kode_supplier,
            'nama_supplier' => $request->nama_supplier,
            'url' => $request->url,
        ]);

        return redirect('/type')->with('success', 'Product Type berhasil ditambahkan.');
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
