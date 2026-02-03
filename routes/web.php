<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealsController;

Route::get('/',[MealsController::class,'read']);

/*
Route::get('/', function () {
    return view('welcome');
});

*/