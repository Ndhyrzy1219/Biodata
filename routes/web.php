<?php

use App\Http\Controllers\RuteController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ini adalah route tanpa mvc
Route::get('/routetanpamvc', function () {
    return 'welcome';
});

// route menggunakan view
Route::get('/ruteview', function () {
    return view('ruteview');
});

//rute menggunakan view dan controller
Route::get('/rutecontroller',[RuteController::class, 'menampilkanData']);

// rute menggunakan view controller dan model
Route::get('/rutemodel',[RuteController::class, 'menampilkanDataModel']);

Route::get('/Biodata',[BiodataController::class, 'menampilkanBiodata']);
