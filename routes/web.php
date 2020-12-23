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
    return view('welcome');
});

// Route Get PCPARTS
Route::get('/pcparts/index', [App\Http\Controllers\PartController::class, 'index']);

// Route Get prebuilt
Route::get('/prebuilt/index', [App\Http\Controllers\prebuiltComputerController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// pcParts
Route::get('/pcparts/index', [App\Http\Controllers\PartController::class, 'index']);
Route::get('/pcparts/create', [App\Http\Controllers\PartController::class, 'create']);
Route::post('/pcparts/store', [App\Http\Controllers\PartController::class, 'store']);

Route::get('/pcparts/edit/{id}', [App\Http\Controllers\PartController::class, 'edit']);
Route::post('/pcparts/update/{id}', [App\Http\Controllers\PartController::class, 'update']);
Route::get('/pcparts/destroy/{id}', [App\Http\Controllers\PartController::class, 'destroy']);

// prebuiltComputers
Route::get('/prebuilt/index', [App\Http\Controllers\prebuiltComputerController::class, 'index']);
Route::get('/prebuilt/create', [App\Http\Controllers\prebuiltComputerController::class, 'create']);
Route::post('/prebuilt/store', [App\Http\Controllers\prebuiltComputerController::class, 'store']);

Route::get('/prebuilt/edit/{id}', [App\Http\Controllers\prebuiltComputerController::class, 'edit']);
Route::post('/prebuilt/update/{id}', [App\Http\Controllers\prebuiltComputerController::class, 'update']);
Route::get('/prebuilt/destroy/{id}', [App\Http\Controllers\prebuiltComputerController::class, 'destroy']);

// Additional Route

Route::get('/prebuilt/ajax', [App\Http\Controllers\prebuiltComputerController::class, 'ajax']);
Route::get('/pcparts/ajax', [App\Http\Controllers\PartController::class, 'ajax']);
