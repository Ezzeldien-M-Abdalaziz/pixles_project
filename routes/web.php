<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::GET('/',[JobController::class,'index']);

