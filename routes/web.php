<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealsController;

Route::get('/',[MealsController::class,'read']);
Route::post('/addMeal',[MealsController::class,'create']);
Route::get('/deleteMeal/{id}', [MealsController::class,'delete']);



/*
Route::get('/', function () {
    return view('welcome');
});

*/