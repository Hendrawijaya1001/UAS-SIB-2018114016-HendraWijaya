<?php

use App\Http\Controllers\Api\AbsenController;
use App\Http\Controllers\Api\MahasiswaController;
use App\Http\Controllers\Api\MatakuliahController;
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

Route::get('', [AbsenController::class, 'index']);
Route::get('/absen/{id}', [AbsenController::class, 'show']);
route::put('/update/{id}', [AbsenController::class, 'update']);
route::delete('/destroy/{id}', [AbsenController::class, 'destroy']);
Route::resources([
    'absen'=>AbsenController::class,
    'mahasiswa'=>MahasiswaController::class,
    'matakuliah'=>MatakuliahController::class,
    ]);
