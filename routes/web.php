<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\AdminController;
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
    return view('home');
});
Route::get('/home',[AdminController::class, 'home'])->name('home');

Route::get('/AdminRegistration',[AdminController::class, 'AdminRegistration'])->name('AdminRegistration');
Route::post('/AdminRegistration',[AdminController::class, 'AdminRegistrationSubmit'])->name('AdminRegistrationSubmit');

Route::get('/AdminLogin',[AdminController::class, 'AdminLogin'])->name('AdminLogin');
Route::post('/AdminLogin',[AdminController::class, 'AdminLoginSubmit'])->name('AdminLoginSubmit');

Route::get('/AdminDash',[AdminController::class, 'AdminDash'])->name('AdminDash');

Route::get('/AdminInfo',[AdminController::class, 'AdminInfo'])->name('AdminInfo');

Route::get('/AdminUpdate',[AdminController::class, 'AdminUpdate'])->name('AdminUpdate');
Route::post('/AdminUpdate',[AdminController::class, 'AdminUpdateSubmit'])->name('AdminUpdateSubmit');