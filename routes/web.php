<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AssetsTypeController;
use App\Http\Controllers\AssetsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/dashboard');
})->name("home")->middleware("auth");
Route::get('/login', function () {
    if(auth()->check()){
        return redirect()->route("home");
    }
    return view('pages/login');
})->name("login");

Route::post("/login",[AuthController::class,"login"])->name("login.action");
Route::get("/logout",[AuthController::class,"logout"])->name("logout");

Route::resource("assetsType",AssetsTypeController::class);
Route::resource("assets",AssetsController::class);
