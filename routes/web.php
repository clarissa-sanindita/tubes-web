<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;

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
    return view('user.home');
});

Route::get('news', function () {
    return view('user.news');
});


Route::get('register', [UserController::class, 'registerView'])->middleware('guest');
Route::post('register', [UserController::class, 'registerProcess']);

Route::get('login', [UserController::class, 'loginView'])->middleware('guest');
Route::post('login', [UserController::class, 'loginProcess']);

Route::post('logout', [UserController::class, 'logoutProcess']);


Route::get('admin', function () {
    return view('admin.dashboard');
});

Route::get('courtUser', [CourtController::class, 'showUser']);
Route::get('court', [CourtController::class, 'show']);
Route::get('courtAdd', [CourtController::class, 'add']);
Route::post('court', [CourtController::class, 'addProcess']);
Route::get('court/edit/{id}', [CourtController::class, 'edit']);
Route::patch('court/{id}', [CourtController::class, 'editProcess']);
Route::delete('court/delete/{id}', [CourtController::class, 'delete']);

Route::get('employee', [EmployeeController::class, 'show']);
Route::get('employeeAdd', [EmployeeController::class, 'add']);
Route::post('employee', [EmployeeController::class, 'addProcess']);
Route::get('employee/edit/{id}', [EmployeeController::class, 'edit']);
Route::patch('employee/{id}', [EmployeeController::class, 'editProcess']);
Route::delete('employee/delete/{id}', [EmployeeController::class, 'delete']);

Route::get('customer', [CustomerController::class, 'show']);
Route::get('customerAdd', [CustomerController::class, 'add']);
Route::post('customer', [CustomerController::class, 'addProcess']);
Route::get('customer/edit/{id}', [CustomerController::class, 'edit']);
Route::patch('customer/{id}', [CustomerController::class, 'editProcess']);
Route::delete('customer/delete/{id}', [CustomerController::class, 'delete']);

Route::get('transaction', [TransactionController::class, 'show']);
Route::get('transactionAdd', [TransactionController::class, 'add']);
Route::post('transaction', [TransactionController::class, 'addProcess']);

