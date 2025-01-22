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

Route::get('/contact', function () {
    return view("front.contact");
});

Route::get('/about-us', function () {
    return view("front.about-us");
});

Route::get('/services', function () {
    return view("front.services.index");
});

Route::get('/services/{slug}', function () {
    return view("front.services.details");
});

Route::get('/blogs', function () {
    return view("front.blogs.index");
});

Route::get('/blogs/{slug}', function () {
    return view("front.blogs.details");
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
