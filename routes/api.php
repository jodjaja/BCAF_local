<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\VendorController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\OfficeController;
use App\Http\Controllers\API\KurirController;


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

Route::middleware('auth:sanctum')->group(function () {
    // Users
    Route::get('/users', [UserController::class, 'index']);
    Route::post('users', [UserController::class, 'store']);
    Route::get('/users/{user}', [UserController::class, 'show']);
    Route::put('users/{user}', [UserController::class, 'update']);
//    Route::delete('users/{user}', [UserController::class, 'destroy']);

    // Offices
    Route::get('/offices', [OfficeController::class, 'index']);
    Route::post('offices', [OfficeController::class, 'store']);
    Route::put('offices/{office}', [OfficeController::class, 'update']);
//    Route::delete('offices/{office}', [OfficeController::class, 'destroy']);

    // Vendors
    Route::get('/vendors', [VendorController::class, 'index']);
    Route::post('vendors', [VendorController::class, 'store']);
    Route::put('vendors/{vendor}', [VendorController::class, 'update']);
    Route::get('/vendors/{vendor}', [VendorController::class, 'show']);
//    Route::delete('vendors/{user}', [VendorController::class, 'destroy']);
    Route::post('/vendors/search', [VendorController::class, 'search']);

    // Roles
    Route::get('/roles', [RoleController::class, 'index']);
    Route::post('/roles', [RoleController::class, 'store']);
    Route::put('/roles/{role}', [RoleController::class, 'update']);
    Route::get('/roles/{role}', [RoleController::class, 'show']);
// Route::delete('/roles/{role}', [RoleController::class, 'destroy']);
});


Route::controller(AuthController::class)->group(function () {
    // Auth web
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('logout', 'logout')->middleware('auth:sanctum');

//    Auth Andorid
    Route::post('/login_android', 'loginAndroid');

});

// Route::post('/sanctum/token', 'APIController@create_token');
