<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Video;
use App\Http\Controllers\RegistrationController;
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
Route::get('/favorites', function () {
    return view('favorites');
});
Route::get('/myvideo', function () {
    return view('myVideo');
});
Route::get('/addvideo', function () {
    return view('addVideo');
});
Route::get('/signup', function () {
    return view('components.signup');
});

Route::get('/test', [Video::class, "test"]);

Route::get('/signup', [RegistrationController::class, 'signup'])->name('signup');
Route::post('/signup', [RegistrationController::class, 'signupPost'])->name('signup');
Route::get('/login', [RegistrationController::class, 'login'])->name('login');
Route::post('/login', [RegistrationController::class, 'loginPost'])->name('login');