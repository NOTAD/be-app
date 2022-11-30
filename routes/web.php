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
Route::get('loginVTB', [\App\Http\Controllers\ApiBankController::class, 'apiVietinbank']);
Route::get('loginVCB', [\App\Http\Controllers\ApiBankController::class, 'apiVietcombank'])->name('api.vietcombank');
