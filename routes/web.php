<?php

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
// View::get('html', 'php');
Route::get('/', function () {
    return View::make('index');
});

Route::fallback(function () {
    return View::make('index');
});
