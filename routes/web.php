<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function () {
    return view("front.contact");
});

Route::get('/about-us', function () {
    return view("front.about-us");
});

Route::get('/services', [ServiceController::class, 'index']);

Route::get('/services/{slug}', [ServiceController::class, 'show']);

Route::get('/blogs', [PostController::class, 'index']);

Route::get('/blogs/{slug}', [PostController::class, 'show']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
