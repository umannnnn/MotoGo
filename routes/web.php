<?php

use App\Models\motor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminDashboard;
use App\Http\Controllers\adminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\motorController;
use App\Http\Controllers\rolesController;
use App\Http\Controllers\sportController;
use App\Http\Controllers\manualController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\adminDashboardController;

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
    return view('landing');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/loginAdmin', [adminController::class, 'index']);
Route::post('/loginAdmin', [adminController::class, 'authenticate']);
Route::post('/logout', [adminController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::group(['middleware' => ['auth']], function () {
Route::get('/role', [rolesController::class, 'index'])->middleware('cekRole');
Route::post('/choose-role', [rolesController::class, 'chooseRole']);
});

Route::resource('penyewa', motorController::class);
Route::get('motor-manual', [motorController::class, 'indexManual']);
Route::get('motor-sport', [motorController::class, 'indexSport']);
Route::resource('pelanggan', pelangganController::class);
Route::resource('dashboard', adminDashboardController::class);


// Route::get('/login', function () {
//     return view('loginRegis');
// });