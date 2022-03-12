<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\AdminController;
use App\http\controllers\ServiceProviderController;
use App\http\controllers\CustomerController;
use App\http\controllers\EmployeeController;
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

Route::get('/AdminLogout', [AdminController::class, 'AdminLogout'])->name('AdminLogout');

Route::get('/ServiceProviderDetails', [ServiceProviderController::class, 'ServiceProviderDetails'])->name('ServiceProviderDetails');

Route::get('/CustomerDetails', [CustomerController::class, 'CustomerDetails'])->name('CustomerDetails');

Route::get('/EmployeeDetails', [EmployeeController::class, 'EmployeeDetails'])->name('EmployeeDetails');