<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\motorController;
use App\Http\Controllers\rolesController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/landing1', function () {
//     return view('landingMatic');
// });

Route::get('/landing2', function () {
    return view('landingManual');
});

Route::get('/landing3', function () {
    return view('landingSport');
});

Route::get('/spec', function () {
    return view('spec');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/index', function () {
    return view('dashboard.index');
});

Route::get('/tambah', function () {
    return view('dashboard.create');
});

Route::get('/ubah', function () {
    return view('dashboard.edit');
});

Route::get('/book', function () {
    return view('dashboard.booking');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::group(['middleware' => ['auth']], function () {
Route::get('/role', [rolesController::class, 'index'])->middleware('cekRole');
Route::post('/choose-role', [rolesController::class, 'chooseRole']);

Route::resource('landing1', motorController::class);
});


// Route::get('/login', function () {
//     return view('loginRegis');
// });