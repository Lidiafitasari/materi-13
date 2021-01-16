<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test/{produk}/{hargaMin?}/{hargaMax?}',[HomeController:: class,'test']);

Route::get('beranda',[HomeController:: class,'showBeranda']);
Route::get('beranda/{status}',[HomeController:: class,'showBeranda']);
Route::get('kategory',[HomeController:: class,'showKategory']);
Route::get('promo',[HomeController:: class,'showPromo']);
Route::get('pelanggan',[HomeController:: class,'showPelanggan']);
Route::get('supplier',[HomeController:: class,'showSupplier']);

Route::get('setting',[SettingController:: class,'index']);
Route::post('setting',[SettingController:: class,'store']);

Route::get('login',[AuthController:: class,'showLogin']);
Route::post('login',[AuthController:: class,'loginProcess'])->name('login');
Route::get('logout',[AuthController:: class,'logout']);


Route::get('register',[AuthController:: class,'showRegister']);
Route::get('create',[HomeController:: class,'showCreate']);
Route::get('template.base',[HomeController:: class,'showTemplate']);


Route::prefix('admin')->middleware('auth')->group(function(){
		Route::post('produk/filter', [ProdukController:: class, 'filter']);
		Route::get('produk',[ProdukController:: class,'index']);
		Route::get('produk/create',[ProdukController:: class,'create']);
		Route::post('produk',[ProdukController:: class,'store']);
		Route::get('produk/{produk}',[ProdukController:: class, 'show']);
		Route::get('produk/{produk}/edit',[ProdukController:: class, 'edit']);
		Route::put('produk/{produk}',[ProdukController:: class, 'update']);
		Route::delete('produk/{produk}',[ProdukController:: class, 'destroy']);


		Route::get('user',[UserController:: class,'index']);
		Route::get('user/create',[UserController:: class,'create']);
		Route::post('user',[UserController:: class,'store']);
		Route::get('user/{user}',[UserController:: class, 'show']);
		Route::get('user/{user}/edit',[UserController:: class, 'edit']);
		Route::put('user/{user}',[UserController:: class, 'update']);
		Route::delete('user/{user}',[UserController:: class, 'destroy']);
	});

Route::get('/', [ClientController:: class, 'home']);
Route::post('home/filter', [ClientController:: class, 'filter']);
Route::get('produk/{produk}', [ClientController:: class, 'show']);

Route::get('daftar',[DaftarController:: class,'index']);
Route::get('daftar/create',[DaftarController:: class,'create']);
Route::post('daftar',[DaftarController:: class,'store']);
Route::get('daftar/{daftar}',[DaftarController:: class, 'show']);
Route::get('daftar/{daftar}/edit',[DaftarController:: class, 'edit']);
Route::put('daftar/{daftar}',[DaftarController:: class, 'update']);
Route::delete('daftar/{daftar}',[DaftarController:: class, 'destroy']);

Route::get('test-collection', [HomeController:: class,'testCollection']);
Route::get('test-ajax', [HomeController:: class,'testAjak']);