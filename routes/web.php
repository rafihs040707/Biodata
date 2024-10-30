<?php

use App\Http\Controllers\RuteController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ini adalah route tanpa mvc
Route::get('/routetanpamvc', function () {
    return "ini adalah jalan route tanpa MVC";
});


// route menggunakan view
Route::get('/routeview', function () {
    return view('routeview');
});


// route menggunakan controller
Route::get('/rutecontroller', [RuteController::class, 'menampilkanData']);


//Route menggunakan View Controller & Model
Route::get('/rutemodel', [RuteController::class, 'menampilkanDataModel']);


Route::get('/biodata', [BiodataController::class, 'menampilkanBiodata']);