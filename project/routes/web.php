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

Auth::routes();


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/user/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('user.home');

Route::get('/admin/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');


Route::get('/logout', function () { Auth::logout(); return redirect()->route('login'); });