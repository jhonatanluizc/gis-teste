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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', [ViewController::class, 'dashboard']);

// Route::get('/login', [UserController::class, 'searchByAllRepos']);

Route::prefix('consulta')->group(function () {
    Route::get('/all', [ConsultaController::class, 'index']);
    Route::get('/store', [ConsultaController::class, 'store']);
});

Route::prefix('user')->group(function () {
    Route::get('/store', [UserController::class, 'store']);
    Route::get('/update', [UserController::class, 'update']);
    Route::get('/delete', [UserController::class, 'delete']);
});
