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
use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function indexDashboard()
    {
        $transactions = PaymentDigiflash::all()->count();
        $transactionSuccess = PaymentDigiflash::where('message', 'Transaksi Sukses')
            ->orWhere('message', 'Success')
            ->count();
        $mitraTransactions = DB::table('pay_digiflash')
            ->join('users', 'pay_digiflash.user', '=', 'users.name')
            ->where('users.role', 'Mitra')
            ->count();
        return view('dashboard', ['transactions' => $transactions, 'transactionSuccess' => $transactionSuccess, 'mitraTransactions' => $mitraTransactions]);
    }

    public function indexDepositMitra()
    {
        $depositMitra = DepositMitra::orderBy('created_at', 'desc')
            ->with('user')->paginate(10);
        return view('pages.mapping_deposit.deposit_mitra.index', ['depositMitra' => $depositMitra]);
    }

    public function indexDeposit()
    {
        $deposit = DepositMitra::orderBy('created_at', 'desc')
            ->with('user')->get();
        $perusahaan = Perusahaan::all();
        return view('pages.mapping_deposit.deposit.index', ['deposit' => $deposit, 'perusahaan' => $perusahaan]);
    }

    public function indexMappingProduct()
    {
        $products = Product::orderBy('created_at', 'desc')
            ->paginate(10);
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
        $paymentDigiflash = PaymentDigiflash::orderBy('created_at', 'desc')
            ->where('message', 'Transaksi Sukses')
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
        $mitra = Perusahaan::with('user')->paginate(10);
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
        $products = Product::paginate(10);
        $partners = Perusahaan::all();
        $productLists = ProductList::all();
        $productCategories = ProductCategory::all();
        return view('pages.settings.product.index', ['products' => $products, 'partners' => $partners, 'productLists' => $productLists, 'productCategories' => $productCategories]);
    }

    public function indexType()
    {
        $categories = ProductCategory::paginate(10);
        return view('pages.settings.product_type.index', ['categories' => $categories]);
    }

    public function indexIP()
    {
        $ips = Whitelist::all();
        $partners = Perusahaan::all();
        return view('pages.settings.whitelist_ip.index', ['ips' => $ips, 'partners' => $partners]);
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
