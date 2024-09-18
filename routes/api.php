<?php

use App\Http\Controllers\Api\SiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/siswa', [SiswaController::class, 'allSiswa']);
Route::post('/siswa/add', [SiswaController::class, 'addSiswa']);
Route::get('/siswa/{id}', [SiswaController::class, 'getOneSiswa']);
Route::post('/siswa/update/{id}', [SiswaController::class, 'editSiswa']);
Route::get('/siswa/delete/{id}', [SiswaController::class, 'deleteSiswa']);