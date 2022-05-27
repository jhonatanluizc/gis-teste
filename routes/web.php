<?php

use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
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

Route::get('/', [ViewController::class, 'index']);

Route::get('/dashboard', [ViewController::class, 'dashboard']);

Route::get('/login', [ViewController::class, 'login']);
Route::get('/logout', [ViewController::class, 'logOut']);


Route::prefix('consulta')->group(function () {
    Route::get('/store', [ConsultaController::class, 'store']);
    Route::get('/update', [ConsultaController::class, 'update']);
    Route::get('/delete/{id}', [ConsultaController::class, 'destroy']);
});

Route::prefix('user')->group(function () {
    Route::get('/update', [UserController::class, 'update']);
});
