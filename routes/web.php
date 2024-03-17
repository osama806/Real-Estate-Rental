<?php

use App\Http\Controllers\HouseController;
use Illuminate\Support\Facades\Route;

Route::get("houses", [HouseController::class, "index"]);

Route::get('/', function () {
    return view('welcome');
});
