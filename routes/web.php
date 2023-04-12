<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerBarang;
use App\Http\Controllers\ControllerSupplier;
use App\Http\Controllers\ControllerLogin;
use App\Http\Controllers\ControllerGudang;
use App\Http\Controllers\ControllerPenjualan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [ControllerLogin::class, 'login']);
Route::post('actionlogin', [ControllerLogin::class, 'actionlogin']);
Route::post('/logout', [ControllerLogin::class, 'logout']);

Route::get('registrasi', [ControllerLogin::class, 'registrasi']);
Route::post('postregistrasi', [ControllerLogin::class, 'postregistrasi']);

Route::get('gudang', [ControllerGudang::class, 'readgudang']);
Route::post('gudang', [ControllerGudang::class, 'readgudang'])->middleware(['auth','checkRole:admin,gudang']);
Route::get('gudang/tambah',[ControllerGudang::class,'tambahgudang']); 
Route::get('gudangmaster/{kodetr}/{tanggal}/{namasup}/{telp}/{alamat}/{keterangan}/{grandtotal}',[ControllerGudang::class,'gudangmaster']); 
Route::get('gudangdetail/{kodetr}/{kodebrg}/{harga}/{jumlah}',[ControllerGudang::class,'gudangdetail']); 
// Route::get('gudang/view',[ControllerGudang::class,'view']); 

Route::get('datapenjualan', [ControllerPenjualan::class, 'datapenjualan'])->middleware('checkRole:admin,operator');

// Route::get('/',[ControllerBarang::class,'readbarang']);
Route::get('barang',[ControllerBarang::class,'readbarang']); 
Route::get('barang/tambah',[ControllerBarang::class,'tambahbarang']); 
Route::post('barang/simpan',[ControllerBarang::class,'simpanbarang']);
Route::get('barang/edit/{kodebr}',[ControllerBarang::class,'editbarang']);  
Route::post('barang/editt',[ControllerBarang::class,'edittbarang']); 
Route::get('barang/hapus/{kodebr}',[ControllerBarang::class,'hapusbarang']);  
Route::get('barang/cari/{cari}',[ControllerBarang::class,'caribarang']);



Route::get('supplier',[ControllerSupplier::class,'readsupplier']); 
Route::get('supplier/tambah',[ControllerSupplier::class,'tambahsupplier']); 
Route::post('supplier/simpan',[ControllerSupplier::class,'simpansupplier']);
Route::get('supplier/edit/{kodesup}',[ControllerSupplier::class,'editsupplier']);  
Route::post('supplier/editt',[ControllerSupplier::class,'edittsupplier']); 
Route::get('supplier/hapus/{kodesup}',[ControllerSupplier::class,'hapussupplier']);  
Route::get('supplier/cari/{cari}',[ControllerSupplier::class,'carisupplier']);

