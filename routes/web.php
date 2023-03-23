<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\charactersController;
use App\Http\Controllers\characters2Controller;
use App\Http\Controllers\characters3Controller;

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
})->name('welcome');

Route::get('/characters',[charactersController::class,"index"])->name('index');
Route::get('/characters2',[characters2Controller::class,"index"])->name('indexall');
Route::get('/characters3',[characters3Controller::class,"index"])->name('index');

