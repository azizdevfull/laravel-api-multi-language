<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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


Route::middleware("localization")->group(function () {
    Route::group(["prefix" => "auth", "as" => "auth."], function () {
        Route::get("/authenticate", [LoginController::class, "authenticate"])->name("authenticate");
        //... other routes
    });
    Route::middleware("auth:sanctum")->group(function () {
        //... other routes
    });
});
