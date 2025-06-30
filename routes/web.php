<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [RouteController::class, 'index']);
Route::get('/depositMitra', [RouteController::class, 'indexDepositMitra']);
Route::get('/deposit', [RouteController::class, 'indexDeposit']);
Route::get('/mappingProduct', [RouteController::class, 'indexMappingProduct']);
Route::get('/pdam', [RouteController::class, 'indexPDAM']);
Route::get('/mitraPDAM', [RouteController::class, 'indexMitraPDAM']);
Route::get('/transaksi', [RouteController::class, 'indexTransaksi']);
Route::get('/user', [RouteController::class, 'indexUser']);
Route::get('/partner', [RouteController::class, 'indexPartner']);
Route::get('/role', [RouteController::class, 'indexRole']);
Route::get('/bank', [RouteController::class, 'indexBank']);
Route::get('/product', [RouteController::class, 'indexProduct']);
Route::get('/type', [RouteController::class, 'indexType']);
Route::get('/ip', [RouteController::class, 'indexIP']);
Route::get('/channel', [RouteController::class, 'indexChannel']);
Route::get('/apiPayment', [RouteController::class, 'indexAPIPayment']);
