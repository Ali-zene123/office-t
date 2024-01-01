<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function () {
    return view('admin/company/dashboard');
});

Route::get('/company', [App\Http\Controllers\CompanyController::class, 'index'])->name('company');
Route::get('/company/create', [App\Http\Controllers\CompanyController::class, 'create'])->name('company.create');
Route::get('/company/edit/{id}', [App\Http\Controllers\CompanyController::class, 'edit'])->name('company.edit');
Route::post('/company/update', [App\Http\Controllers\CompanyController::class, 'update'])->name('company.update');
Route::post('/company/store', [App\Http\Controllers\CompanyController::class, 'store'])->name('company.store');
Route::get('/company/delete/{id}', [App\Http\Controllers\CompanyController::class, 'destroy'])->name('company.delete');

Route::get('/ticket', [App\Http\Controllers\TicketController::class, 'index'])->name('ticket');
Route::get('/ticket/create', [App\Http\Controllers\TicketController::class, 'create'])->name('ticket.create');
Route::get('/ticket/edit/{id}', [App\Http\Controllers\TicketController::class, 'edit'])->name('ticket.edit');
Route::post('/ticket/update', [App\Http\Controllers\TicketController::class, 'update'])->name('ticket.update');
Route::post('/ticket/store', [App\Http\Controllers\TicketController::class, 'store'])->name('ticket.store');
Route::get('/ticket/delete/{id}', [App\Http\Controllers\TicketController::class, 'destroy'])->name('ticket.delete');

