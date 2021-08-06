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
    return view('auth/login');
});
Route::get('/google/signin' , [App\Http\Controllers\Auth\LoginController::class, 'google']);
Route::get('/sign-in/google/redirect' , [App\Http\Controllers\Auth\LoginController::class, 'googleredirect']);
Route::get('/uploadexcel', [\App\Http\Controllers\UserecordController::class, 'import']);
Route::post('/uploadexcel', [\App\Http\Controllers\UserecordController::class, 'importexcel']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\UserecordController::class, 'show']);
