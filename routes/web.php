<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealsController;
use App\Http\Controllers\GoalController;



/*
Route::get('/', function () {
    return view('welcome');
});

*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/',[MealsController::class,'read']);
    Route::post('/addMeal',[MealsController::class,'create']);
    Route::get('/deleteMeal/{id}', [MealsController::class,'delete']);
    
    Route::get('/goals', [GoalController::class,'show']);
    Route::post('/updateGoals', [GoalController::class,'create']);
    
});
