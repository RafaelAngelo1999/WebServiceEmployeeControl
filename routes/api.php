<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeProductController;
use App\Http\Controllers\EmployeeSquadController;
use App\Http\Controllers\EmployeeStatusController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SquadController;
use App\Http\Controllers\SquadTribeController;
use App\Http\Controllers\TribeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'middleware' => 'auth.jwt'], function() {

    //Employeer
    Route::resource('employee-status', EmployeeStatusController::class);
    Route::resource('employee-product', EmployeeProductController::class);
    Route::resource('employee', EmployeeController::class);
    Route::resource('employee-squad', EmployeeSquadController::class);
    //Squad
    Route::resource('squad', SquadController::class);
    Route::resource('squad-tribe', SquadTribeController::class);

    Route::resource('office', OfficeController::class);
    Route::resource('tribe', TribeController::class);
    Route::resource('product', ProductController::class);
});

    //Login
    Route::post('login', [AuthController::class,'login']);
    Route::post('/user', [UserController::class, 'store']);
    Route::get('/index', [UserController::class, 'index']);


