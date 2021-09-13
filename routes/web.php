<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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

Route::get('/home', [MyController::class, 'index']);
Route::prefix('/prodi')->group(function () {
    Route::get('/manajemen-informatika', [MyController::class, 'mi']);
    Route::get('/teknik-informatika', [MyController::class, 'ti']);
});
Route::get('/news/{id}', [MyController::class, 'news']);
Route::prefix('/sarana')->group(function () {
    Route::get('/perkantoran', [MyController::class, 'perkantoran']);
    Route::get('/laboratorium', [MyController::class, 'laboratorium']);
    Route::get('/kelas', [MyController::class, 'kelas']);
    Route::get('/lainnya', [MyController::class, 'lainnya']);
});
Route::get('/about-us', [MyController::class, 'about']);
Route::get('/comment/{nama}/{pesan}', [MyController::class, 'comment']);