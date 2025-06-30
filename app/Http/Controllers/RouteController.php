<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;

class RouteController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function indexDepositMitra()
    {
        return view('pages.mapping_deposit.deposit_mitra.index');
    }

    public function indexDeposit()
    {
        return view('pages.mapping_deposit.deposit.index');
    }

    public function indexMappingProduct()
    {
        return view('layouts.main');
    }

    public function indexPDAM()
    {
        return view('layouts.main');
    }

    public function indexMitraPDAM()
    {
        $mitra = Perusahaan::all();
        return view('pages.settlement.mitra.index', ['mitra' => $mitra]);
    }

    public function indexTransaksi()
    {
        return view('layouts.main');
    }

    public function indexUser()
    {
        return view('layouts.main');
    }

    public function indexPartner()
    {
        return view('layouts.main');
    }

    public function indexRole()
    {
        return view('layouts.main');
    }

    public function indexBank()
    {
        return view('layouts.main');
    }

    public function indexProduct()
    {
        return view('layouts.main');
    }

    public function indexType()
    {
        return view('layouts.main');
    }

    public function indexIP()
    {
        return view('layouts.main');
    }

    public function indexChannel()
    {
        return view('layouts.main');
    }

    public function indexAPIPayment()
    {
        return view('layouts.main');
    }
}
