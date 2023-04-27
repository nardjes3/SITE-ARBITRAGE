<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dash', function () {
    return view('Admin/dash');
});



Route::get('/payee', function () {
    return view('Admin/payee');
});

Route::get('/list', function () {
    return view('Admin/list_ar');
});

Route::get('/instructor', function () {
    return view('Admin/instructor');
});
Route::get('/analytics', function () {
    return view('Admin/analytic');
});
Route::get('/repport', function () {
    return view('Admin/report');
});
Route::get('/profilAdmin','App\Http\Controllers\sec@affSec');
Route::post('update','App\Http\Controllers\sec@update');


