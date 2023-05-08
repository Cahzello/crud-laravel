<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/mahasiswas', [MahasiswaController::class, 'index'])
->name('mahasiswas.index');

Route::get('/mahasiswas/create', [MahasiswaController::class, 'create'])
->name('mahasiswas.create');

Route::post('/mahasiswas', [MahasiswaController::class, 'store'])
->name('mahasiswas.store');
