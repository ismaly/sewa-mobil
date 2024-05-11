<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KendaraanController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'dashboardview'])->name('dashboardview');

Route::get('/loginview', [LoginController::class, 'loginview'])->name('loginview');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');


Route::get('/registrasi', [RegisController::class, 'regisview'])->name('regisview');
Route::post('regisproses', [RegisController::class, 'regisproses'])->name('regisproses');

Route::get('/tambah', [KendaraanController::class, 'tambahview'])->name('tambahview');
Route::post('/tambahproses', [KendaraanController::class, 'tambahproses'])->name('tambahproses');
