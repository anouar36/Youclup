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


Route::delete('/admin/dashboard/{id}', [App\Http\Controllers\admin\DashboardController::class, 'destroy'])->name('User.destroy');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

Route::get('/logout', function () { Auth::logout(); return redirect()->route('login'); });

// all thicks of  clubs
Route::get('/Clubs/index', [App\Http\Controllers\admin\ClubController::class, 'index'])->name('Clubs.index');
Route::DELETE('/Clubs/destroy/{id}', [App\Http\Controllers\admin\ClubController::class, 'destroy'])->name('Clubs.destroy');
Route::get('/Clubs/create', [App\Http\Controllers\admin\ClubController::class, 'create'])->name('Clubs.create');
Route::POST('/Clubs/store', [App\Http\Controllers\admin\ClubController::class, 'store'])->name('Clubs.store');


Route::GET('/Clubs/edit/{id}', [App\Http\Controllers\admin\ClubController::class, 'edit'])->name('Clubs.edit');
Route::POST('/Clubs/update/{id}', [App\Http\Controllers\admin\ClubController::class, 'updat'])->name('Clubs.updat');









