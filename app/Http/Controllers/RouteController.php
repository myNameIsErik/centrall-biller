<?php

namespace App\Http\Controllers;

use App\Models\DepositMitra;
use App\Models\InquiryDigiflash;
use App\Models\PaymentDigiflash;
use App\Models\PDAM;
use Illuminate\Http\Request;
use App\Models\Perusahaan;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductList;
use App\Models\Role;
use App\Models\User;
use App\Models\Whitelist;

class RouteController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function indexDepositMitra()
    {
        $depositMitra = DepositMitra::with('user')->get();
        return view('pages.mapping_deposit.deposit_mitra.index', ['depositMitra' => $depositMitra]);
    }

    public function indexDeposit()
    {
        $deposit = DepositMitra::with('user')->get();
        $perusahaan = Perusahaan::all();
        return view('pages.mapping_deposit.deposit.index', ['deposit' => $deposit, 'perusahaan' => $perusahaan]);
    }

    public function indexMappingProduct()
    {
        $products = Product::paginate(10);
        return view('pages.mapping_product.index', ['products' => $products]);
    }

    public function indexPDAM()
    {
        $pdam = PDAM::all();
        return view('pages.settlement.pdam.index', ['pdam' => $pdam]);
    }

    public function indexMitraPDAM()
    {
        return view('pages.settlement.mitra.index');
    }

    public function indexTransaksi()
    {
        $paymentDigiflash = PaymentDigiflash::where('message', 'Transaksi Sukses')
            ->orWhere('message', 'Success')
            ->paginate(10);
        return view('pages.laporan.transaksi.index', ['paymentDigiflash' => $paymentDigiflash]);
    }

    public function indexUser()
    {
        $users = User::all();
        $roles = Role::all();
        return view('pages.user_management.user.index', ['users' => $users, 'roles' => $roles]);
    }

    public function indexPartner()
    {
        $mitra = Perusahaan::with('user')->get();
        return view('pages.user_management.partner.index', ['mitra' => $mitra]);
    }

    public function indexRole()
    {
        $roles = Role::all();
        return view('pages.user_management.role.index', ['roles' => $roles]);
    }

    public function indexBank()
    {
        return view('layouts.main');
    }

    public function indexProduct()
    {
        $products = ProductList::paginate(10);
        return view('pages.settings.product.index', ['products' => $products]);
    }

    public function indexType()
    {
        $categories = ProductCategory::paginate(10);
        return view('pages.settings.product_type.index', ['categories' => $categories]);
    }

    public function indexIP()
    {
        $ips = Whitelist::all();
        return view('pages.settings.whitelist_ip.index', ['ips' => $ips]);
    }

    public function indexChannel()
    {
        return view('layouts.main');
    }

    public function indexAPIPayment()
    {
        $inquiryDigiflash = InquiryDigiflash::paginate(10);
        return view('pages.logs.api_payment.index', ['inquiryDigiflash' => $inquiryDigiflash]);
    }
}
