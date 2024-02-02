<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager\MeetingController;
use App\Http\Controllers\Manager\WarehouseController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::group(['middleware' => ['role:manager']], function () {
        Route::apiResources([
            'meetings' => MeetingController::class,
            'warehouses' => WarehouseController::class,
        ]);
    });
});