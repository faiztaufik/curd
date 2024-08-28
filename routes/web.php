<?php

use App\Http\Controllers\MhsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/dashboard',[MhsController::class,'index'])->name('mhs.tampil');
Route::get('/dashboard/tambah',[MhsController::class,'tambah'])->name('tambah.mhs');
Route::post('/dashboard/submit',[MhsController::class,'submit'])->name('submit.mhs');
Route::get('/dashboard/edit/{id}',[MhsController::class,'edit'])->name('edit.mhs');
Route::post('/dashboard/update/{id}',[MhsController::class,'update'])->name('update.mhs');
Route::post('/dashboard/delete/{id}',[MhsController::class,'delete'])->name('delete.mhs');