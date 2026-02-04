<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

/* Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root'); */

Route::get('/', function () {
    return view('coastal-association');
});

Route::get('/gallery', function () {
    return view('coastal-gallery');
});

Route::get('/rita-profile', function () {
    return view('coastal-profile');
});

Route::get('/henry-profile', function () {
    return view('coastal-profile2');
});

Route::get('/ishmael-profile', function () {
    return view('coastal-profile3');
});

Route::get('/frank-profile', function () {
    return view('coastal-profile4');
});

Route::get('/priscilla-profile', function () {
    return view('coastal-profile5');
});

Route::get('/amoakoh-profile', function () {
    return view('coastal-profile6');
});

Route::get('/arhin-profile', function () {
    return view('coastal-profile7');
});

Route::get('/joseph-profile', function () {
    return view('coastal-profile8');
});

Route::get('/kenah-profile', function () {
    return view('coastal-profile10');
});

Route::get('/charles-profile', function () {
    return view('coastal-profile9');
});
//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

/* Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index'); */
