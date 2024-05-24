<?php

use App\Http\Controllers\Frontend\ElementsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\GenericController;
use App\Http\Controllers\Frontend\HomeController;
use phpDocumentor\Reflection\DocBlock\Tags\Generic;

Route::get('/', [HomeController::class, 'index']);
Route::get('/elements', [ElementsController::class, 'index']);
Route::get('/generic', [GenericController::class, 'index']);

