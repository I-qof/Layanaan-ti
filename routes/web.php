<?php

use App\Http\Controllers\AduanController;
use App\Http\Controllers\BarangPakaiAduanController;
use App\Http\Controllers\BarangPakaiPermintaanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\SperpatController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('views.pengaduan.pengaduan');
});

Auth::routes();

// halaman view
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aduan/view',[AduanController::class,'view']);
Route::get('/permintaan/view',[PermintaanController::class,'view']);
Route::get('/status/view',[StatusController::class,'view']);
Route::get('/sperpat/view',[SperpatController::class,'view']);
Route::get('/inventaris/view',[InventarisController::class,'view']);
Route::get('/jenis-barang/view',[JenisBarangController::class,'view']);
Route::get('/dashboard', function () {
    return view('views.dashboard');
});

// Route Aduan
Route::group(['prefix' => 'aduan'], function () {
    Route::get('/', [AduanController::class, 'index']);
    Route::get('/getById/{id}',[AduanController::class,'getById']);
    Route::post('/store',[AduanController::class],'store');
    Route::post('/update/{id}',[AduanController::class],'update');
    Route::get('/delete/{id}',[AduanController::class],'destroy');
});

Route::group(['prefix' => 'permintaan'], function () {
    Route::get('/', [PermintaanController::class, 'index']);
    Route::get('/getById/{id}',[PermintaanController::class,'getById']);
    Route::post('/store',[PermintaanController::class],'store');
    Route::post('/update/{id}',[PermintaanController::class],'update');
    Route::get('/delete/{id}',[PermintaanController::class],'destroy');
});

Route::group(['prefix' => 'barang_pakai/aduan'], function () {
    Route::get('/', [BarangPakaiAduanController::class, 'index']);
    Route::get('/getById/{id}',[BarangPakaiAduanController::class,'getById']);
    Route::post('/store',[BarangPakaiAduanController::class],'store');
    Route::post('/update/{id}',[BarangPakaiAduanController::class],'update');
    Route::get('/delete/{id}',[BarangPakaiAduanController::class],'destroy');
});

Route::group(['prefix' => 'barang_pakai/permintaan'], function () {
    Route::get('/', [BarangPakaiPermintaanController::class, 'index']);
    Route::get('/getById/{id}',[BarangPakaiPermintaanController::class,'getById']);
    Route::post('/store',[BarangPakaiPermintaanController::class],'store');
    Route::post('/update/{id}',[BarangPakaiPermintaanController::class],'update');
    Route::get('/delete/{id}',[BarangPakaiPermintaanController::class],'destroy');
});

Route::group(['prefix' => 'inventaris'], function () {
    Route::get('/', [InventarisController::class, 'index']);
    Route::get('/getById/{id}',[InventarisController::class,'getById']);
    Route::post('/store',[InventarisController::class],'store');
    Route::post('/update/{id}',[InventarisController::class],'update');
    Route::get('/delete/{id}',[InventarisController::class],'destroy');
});

Route::group(['prefix' => 'jenis-barang'], function () {
    Route::get('/', [JenisBarangController::class, 'index']);
    Route::get('/getById/{id}',[JenisBarangController::class,'getById']);
    Route::post('/store',[JenisBarangController::class],'store');
    Route::post('/update/{id}',[JenisBarangController::class],'update');
    Route::get('/delete/{id}',[JenisBarangController::class],'destroy');
});

Route::group(['prefix' => 'sperpat'], function () {
    Route::get('/', [SperpatController::class, 'index']);
    Route::get('/getById/{id}',[SperpatController::class,'getById']);
    Route::post('/store',[SperpatController::class],'store');
    Route::post('/update/{id}',[SperpatController::class],'update');
    Route::get('/delete/{id}',[SperpatController::class],'destroy');
});

Route::group(['prefix' => 'status'], function () {
    Route::get('/', [StatusController::class, 'index']);
    Route::get('/getById/{id}',[StatusController::class,'getById']);
    Route::post('/store',[StatusController::class],'store');
    Route::post('/update/{id}',[StatusController::class],'update');
    Route::get('/delete/{id}',[StatusController::class],'destroy');
});


Route::group(['middleware'=>'auth'],function(){

});
