<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperAdmin\RegionController;


Route::group(['middleware' => ['role:super-admin|admin|manager']], function () {
    Route::get('usersList', [AuthController::class, 'usersList'])->middleware('auth:sanctum');
    Route::apiResources([
        'regions' => RegionController::class,
    ]);
});
