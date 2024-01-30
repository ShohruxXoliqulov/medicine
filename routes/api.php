<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProducttypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AptekaController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\WarehouseController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'login']);
Route::post('signup', [AuthController::class, 'signUp']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('getUser', [AuthController::class, 'getUser'])->middleware('auth:sanctum');
Route::get('usersList', [AuthController::class, 'usersList'])->middleware('auth:sanctum');


Route::apiResources([
    'producttypes' => ProducttypeController::class,
    'products' => ProductController::class,
    'regions' => RegionController::class,
    'employees' => EmployeeController::class,
    'aptekas' => AptekaController::class,
    'doctors' => DoctorController::class,
    'meetings' => MeetingController::class,
    'warehouses' => WarehouseController::class,
]);
