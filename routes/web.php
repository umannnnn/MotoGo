<?php

use Illuminate\Support\Facades\Route;

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
    return view('landingMatic');
});

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


// Route::get('/login', function () {
//     return view('loginRegis');
// });