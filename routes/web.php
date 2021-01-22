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

// Eloquent ORM pada Laravel //

Route::get('/detail/{id}','Kategoricontroller@detail');
Route::get('/tampil','Kategoricontroller@tampil');
Route::get('/edit/{id}','Kategoricontroller@edit');
Route::post('/edit/simpan','Kategoricontroller@simpan');
Route::post('/simpan','Kategoricontroller@simpand');
Route::get('/tambah',function(){
    return view('tambah');
});
Route::get('/hapus/{id}','Kategoricontroller@hapus');
Route::post('/hapus','Kategoricontroller@hapusPost');
Route::get('/perbahrui','Kategoricontroller@perbahrui');
Route::get('/cari','Kategoricontroller@cari');
