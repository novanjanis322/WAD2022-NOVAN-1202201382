<?php

use App\Http\Controllers\ShowroomController;
use Illuminate\Support\Facades\Route;
use App\Models\Showroom;


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

Route::get('/', [ShowroomController::class, 'index']);
Route::get('/login', [ShowroomController::class, 'login']);
Route::get('/addcar', [ShowroomController::class, 'create']);
Route::get('/listcar', [ShowroomController::class, 'listcar']);
Route::get('/detailcar/{id}', [ShowroomController::class, 'detailcar']);
Route::get('/edit/{id}', [ShowroomController::class, 'edit']);
Route::get('/delete/{id}', [ShowroomController::class, 'destroy']);
Route::resource('insertcar', ShowroomController::class);
Route::get('read', [ShowroomController::class, 'read']);
Route::post('/edit/{id}', [ShowroomController::class, 'update']);
// Route::get('/detail', function () {
//     return view('pages/detail-novan');
// });
