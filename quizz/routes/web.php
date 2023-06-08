<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Models\Profile;

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
    return view('main');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/DaftarMahasiswa',[MahasiswaController::class , 'index']);
Route::get('/Profile', function () {
    return view('profile' , [
        'profiles' => Profile :: all()
    ]);
});

