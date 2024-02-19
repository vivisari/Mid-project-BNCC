<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Karyawan1Controller;


Route::get("/", [Karyawan1Controller::class,'show'])->name('show');
Route::get("/login", [Karyawan1Controller::class,'login'])->name('login');
Route::post("/store", [Karyawan1Controller::class,'store'])->name('store');
Route::get("/edit/{id}", [Karyawan1Controller::class,'edit'])->name('edit');
Route::patch("/update/{id}", [Karyawan1Controller::class,'update'])->name('update');
Route::delete("/delete/{id}", [Karyawan1Controller::class,'delete'])->name('delete');

