<?php

namespace App\Http\Controllers;

use App\Models\DepositMitra;
use Illuminate\Http\Request;

class DepositController extends Controller
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
    public function storeDeposit(Request $request)
    {
        $request->validate([
            'user_id' => 'required|string|max:50',
            'saldo' => 'required|string|max:50',
            'saldo_sandbox' => 'required|string|max:50',
        ]);

        DepositMitra::create([
            'user_id' => $request->user_id,
            'saldo' => $request->saldo,
            'saldo_sandbox' => $request->saldo_sandbox,
        ]);

        return redirect('/deposit')->with('success', 'Deposit berhasil ditambahkan.');
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
