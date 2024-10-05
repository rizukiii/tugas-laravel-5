<?php

use App\Http\Controllers\LaptopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.dashboard.index');
});

Route::get('laptop',[LaptopController::class, 'index']);
Route::get('laptop/create',[LaptopController::class, 'create']);
Route::post('laptop/store',[LaptopController::class, 'store']);
Route::get('laptop/show/{laptop}',[LaptopController::class, 'show']);
Route::get('laptop/edit/{laptop}',[LaptopController::class, 'edit']);
Route::post('laptop/update/{laptop}',[LaptopController::class, 'update']);



