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

Route::get('/', function () {
    return view('welcome');
});
// Front End System

Route::get('/erp', function(){
    return view('dashboard');
});


// Main Object System
Route::resource('/products', App\Http\Controllers\ProductController::class);
Route::resource('/employees', App\Http\Controllers\EmployeeController::class);
Route::resource('/customers', App\Http\Controllers\CustomerController::class);
Route::resource('/shippers', App\Http\Controllers\ShipperController::class);
// Sub Object System
Route::resource('/process', App\Http\Controllers\ProcessController::class);
Route::resource('/projects', App\Http\Controllers\ProjectController::class);
// Process System

Route::resource('/orders', App\Http\Controllers\OrderController::class);
Route::resource('/plannings',App\Http\Controllers\PlanningController::class);



