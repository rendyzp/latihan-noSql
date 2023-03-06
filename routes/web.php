<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ContactController;

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

Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa/create', [SiswaController::class, 'store']);
Route::get('/siswa/index', [SiswaController::class, 'index']);

Route::get('siswa/{siswa:slug}', [SiswaController::class, 'edit']);
Route::put('siswa/{siswa:slug}', [SiswaController::class, 'update']);

Route::delete('siswa/{slug}', [SiswaController::class, 'delete']);
