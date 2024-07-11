<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\DataTableController;
use App\Http\Controllers\SawController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/alternatif', [AlternatifController::class, 'alternatif'])->name('alternatif');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/forgot-password', [LoginController::class, 'forgot_password'])->name('forgot-password');
Route::post('/forgot-password-act', [LoginController::class, 'forgot_password_act'])->name('forgot-password-act');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');
Route::get('/validasi-forgot-password/{token}', [LoginController::class, 'validasi_forgot_password'])->name('validasi-forgot-password');
Route::post('/validasi-forgot-password-act', [LoginController::class, 'validasi_forgot_password_act'])->name('validasi-forgot-password-act');

Route::get('/login-google', [GoogleController::class, 'login_google'])->name('login-google');
Route::get('/google/redirect', [GoogleController::class, 'redirect'])->name('google.redirect');
Route::get('/google/callback', [GoogleController::class, 'callback'])->name('google.callback');
Route::get('/landing', [GoogleController::class, 'landing'])->name('home.landing');

Route::get('/kriteria', [CriteriaController::class, 'kriteria'])->name('kriteria');
Route::get('/create/criteria', [CriteriaController::class, 'create'])->name('criteria.create');
Route::post('/store/criteria', [CriteriaController::class, 'store'])->name('criteria.store');
Route::get('/edit/criteria/{id}', [CriteriaController::class, 'edit'])->name('criteria.edit');
Route::put('/update/criteria/{id}', [CriteriaController::class, 'update'])->name('criteria.update');
Route::delete('/delete/criteria/{id}', [CriteriaController::class, 'delete'])->name('criteria.delete');

Route::get('/alternatif', [AlternatifController::class, 'alternatif'])->name('alternatif');
Route::get('/create/alternatif', [AlternatifController::class, 'create'])->name('alternatif.create');
Route::post('/store/alternatif', [AlternatifController::class, 'store'])->name('alternatif.store');
Route::get('/edit/alternatif/{id}', [AlternatifController::class, 'edit'])->name('alternatif.edit');
Route::put('/update/alternatif/{id}', [AlternatifController::class, 'update'])->name('alternatif.update');
Route::delete('/delete/alternatif/{id}', [AlternatifController::class, 'delete'])->name('alternatif.delete');
Route::get('/hasilHitung', [AlternatifController::class, 'hasil'])->name('hasilHitung');

Route::get('/clientside', [DataTableController::class, 'clientside'])->name('clientside');
Route::get('/serverside', [DataTableController::class, 'serverside'])->name('serverside');

Route::get('/normalisasi', [SawController::class, 'index'])->name('normalisasi');