<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin',function(){
    return view('utama');
});
Route::get('test',function(){
    return view('layouts.admin');
});

Route::get('kota',function(){
    return view('kota.index');
});
Route::get('kecamatan',function(){
    return view('kecamatan.index');
});
Route::get('provinsi',function(){
    return view('provinsi.index');
});

// PROVINSI
use App\Http\Controllers\ProvinsiController;
Route::resource('provinsi',ProvinsiController::class);
// KOTA
use App\Http\Controllers\KotaController;
Route::resource('kota',KotaController::class);
// KECAMATAN
use App\Http\Controllers\KecamatanController;
Route::resource('kecamatan',KecamatanController::class);
// KELURAHAN
use App\Http\Controllers\KelurahanController;
Route::resource('kelurahan',KelurahanController::class);
// RW
use App\Http\Controllers\RwController;
Route::resource('rw',RwController::class);
// KASUS2
use App\Http\Controllers\Kasus2Controller;
Route::resource('kasus2',Kasus2Controller::class);
//FRONTEND
use App\Http\Controllers\WelcomeController;
Route::resource('/',WelcomeController::class);