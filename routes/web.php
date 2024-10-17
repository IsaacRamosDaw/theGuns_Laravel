<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\GunController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('guns', GunController::class);

