<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RefereController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AnalyController;


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



Route::get('/instructor', function () {
    return view('Admin/instructor');
});

Route::get('/repport', function () {
    return view('Admin/report');
});
Route::get('/calendar', function () {
    return view('Admin/calendar');
});
Route::get('/ligue', function () {
    return view('Admin/ligue');
});
Route::get('/ligue2', function () {
    return view('Admin/ligue2');
});

    

Route::get('profilAdmin', [adminController::class, 'show']);
Route::get('profilAdmin/{id}', [adminController::class, 'edit']);
Route::post('profilAdmin', [adminController::class, 'update']);



Route::view('list', 'Admin.list_ar');
Route::post('list', [RefereController::class, 'addArbi']);

Route::get('list', [RefereController::class, 'show']);

Route::get('edit/{id}', [RefereController::class, 'edit']);
Route::post('edit', [RefereController::class, 'update']);

Route::get('delete/{id}', [RefereController::class, 'delete']);
Route::view('analytics', 'Admin.analytic');
Route::get('/analytics', [AnalyController::class, 'statistic']);
