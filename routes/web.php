<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TangkiController;
use App\Http\Controllers\Tangki2Controller;
use App\Http\Controllers\Tangki3Controller;
use App\Http\Controllers\Tangki4Controller;
use App\Http\Controllers\TangkiChartController;

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


//Data Tangki A/1
Route::get('/tangki_a', [TangkiController::class, 'tampil'] );
Route::get('/tangki_a/tambah', [TangkiController::class, 'tambah'] );
Route::post('/tangki_a/tambah/proses', [TangkiController::class, 'proses_tambah'] );
Route::get('/tangki_a/edit/{id}', [TangkiController::class, 'edit'] );
Route::post('/tangki_a/edit/proses/{id}', [TangkiController::class, 'proses_edit'] );
Route::get('/tangki_a/hapus/{id}', [TangkiController::class, 'hapus'] );

//Data Tangki B/2
Route::get('/tangki_b', [Tangki2Controller::class, 'tampil'] );
Route::get('/tangki_b/tambah', [Tangki2Controller::class, 'tambah'] );
Route::post('/tangki_b/tambah/proses', [Tangki2Controller::class, 'proses_tambah'] );
Route::get('/tangki_b/edit/{id}', [Tangki2Controller::class, 'edit'] );
Route::post('/tangki_b/edit/proses/{id}', [Tangki2Controller::class, 'proses_edit'] );
Route::get('/tangki_b/hapus/{id}', [Tangki2Controller::class, 'hapus'] );

//Data Tangki C/3
Route::get('/tangki_c', [Tangki3Controller::class, 'tampil'] );
Route::get('/tangki_c/tambah', [Tangki3Controller::class, 'tambah'] );
Route::post('/tangki_c/tambah/proses', [Tangki3Controller::class, 'proses_tambah'] );
Route::get('/tangki_c/edit/{id}', [Tangki3Controller::class, 'edit'] );
Route::post('/tangki_c/edit/proses/{id}', [Tangki3Controller::class, 'proses_edit'] );
Route::get('/tangki_c/hapus/{id}', [Tangki3Controller::class, 'hapus'] );

//Data Tangki D/4
Route::get('/tangki_d', [Tangki4Controller::class, 'tampil'] );
Route::get('/tangki_d/tambah', [Tangki4Controller::class, 'tambah'] );
Route::post('/tangki_d/tambah/proses', [Tangki4Controller::class, 'proses_tambah'] );
Route::get('/tangki_d/edit/{id}', [Tangki4Controller::class, 'edit'] );
Route::post('/tangki_d/edit/proses/{id}', [Tangki4Controller::class, 'proses_edit'] );
Route::get('/tangki_d/hapus/{id}', [Tangki4Controller::class, 'hapus'] );

// Char Data Tangki
Route::get('/chart_tangki_a', [TangkiChartController::class, 'tangki1'] );
Route::get('/chart_tangki_b', [TangkiChartController::class, 'tangki2'] );
Route::get('/chart_tangki_c', [TangkiChartController::class, 'tangki3'] );
Route::get('/chart_tangki_d', [TangkiChartController::class, 'tangki4'] );

//Overview Data Tangki
Route::get('/', [TangkiChartController::class, 'overview'] );
