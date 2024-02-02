<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\AptekaController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductTypeController;
use App\Http\Controllers\Admin\EmployeeController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::group(['middleware' => ['role:admin']], function () {
        Route::apiResources([
            'doctors' => DoctorController::class,
            'aptekas' => AptekaController::class,
            'products' => ProductController::class,
            'employees' => EmployeeController::class,
            'productTypes' => ProductTypeController::class,
        ]);
    });
});