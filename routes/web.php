<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserManagementController;
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

// index route 
Route::get('/', [RouteController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/dasboard', [RouteController::class, 'indexDashboard'])->middleware('auth');
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

// mapping deposit
Route::post('/createDeposit', [DepositController::class, 'storeDeposit']);

// user management
Route::post('/createUser', [UserManagementController::class, 'storeUser']);
Route::post('/createPartner', [UserManagementController::class, 'storePartner']);
Route::put('/partner/verifikasi/{id_perusahaan}', [UserManagementController::class, 'verifikasi']);
Route::put('/partner/update/{id_perusahaan}', [UserManagementController::class, 'updatePartner']);
Route::post('/createRole', [UserManagementController::class, 'storeRole']);

// settings
Route::post('/createProduct', [SettingsController::class, 'storeProduct']);
Route::post('/createType', [SettingsController::class, 'storeType']);
Route::post('/createIP', [SettingsController::class, 'storeIP']);
