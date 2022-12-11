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
Route::resource('insertcar', ShowroomController::class);
Route::get('read', [ShowroomController::class, 'read']);
// Route::get('/detail', function () {
//     return view('pages/detail-novan');
// });
