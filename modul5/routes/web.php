<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataController;
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

Route::get('/profile',[ProfileController::class, 'index']);
Route::get('/profile/indentity',[ProfileController::class, 'indentity']);
Route::get('/profile/family',[ProfileController::class, 'family']);

Route::get('/table',[DataController::class, 'skillAcademic']);




