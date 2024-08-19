<?php

use App\Http\Controllers\DogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource('dogs', DogController::class);
