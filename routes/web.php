<?php

use Illuminate\Support\Facades\Route;


Route::get('/pasien',[App\Http\Controllers\DashboardController::class,'render'])->name('patient');
Route::post('/pasien/input', [App\Http\Controllers\DashboardController::class,'store'])->name('store.patient');
Route::post('/pasien/update', [App\Http\Controllers\DashboardController::class, 'update'])->name('update.patient');
Route::get  ('/pasien/{id}/delete', [App\Http\Controllers\DashboardController::class, 'delete'])->name('delete.patient');

Route::get('/rekam-medis', [App\Http\Controllers\MedicalRecordController::class, 'render'])->name('medical-record');

Route::get('/obat', [App\Http\Controllers\MedicineController::class, 'render'])->name('medicine');
Route::post('/obat/input',[App\Http\Controllers\MedicineController::class,'store'])->name('store.medicine');
Route::get('/obat/{id}/delete',[App\Http\Controllers\MedicineController::class,'delete'])->name('delete.medicine');
// Route::get('/dashboard', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view()
// });
