<?php

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

Route::post('/tambah-data-mahasiswa', '\App\Http\Controllers\MahasiswaController@create');

Route::post('/update-data-mahasiswa', '\App\Http\Controllers\MahasiswaController@update');

Route::post('/delete-data-mahasiswa', '\App\Http\Controllers\MahasiswaController@delete');

Route::get('/tampilkan-data-mahasiswa', '\App\Http\Controllers\MahasiswaController@showdata');
