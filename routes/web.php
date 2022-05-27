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

Route::prefix('consulta')->group(function () {
    Route::post('/store', [ConsultaController::class, 'store']);
    Route::post('/update', [ConsultaController::class, 'update']);
    Route::post('/delete/{id}', [ConsultaController::class, 'destroy']);
});

Route::prefix('user')->group(function () {
    Route::post('/update', [UserController::class, 'update']);
});
