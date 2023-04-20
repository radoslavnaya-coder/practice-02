<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Video;
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

Route::get('/test', [Video::class, "test"]);