<?php

use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',welcomeController::class);
