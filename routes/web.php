<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[OfferController::class, "home"]);

Route::get("/offers", [OfferController::class, "index"]);
Route::post("/offers", [OfferController::class, "filter"]);
Route::get("/offers/create", [OfferController::class, "create"]);
Route::post("/offers/create", [OfferController::class, "store"]);
Route::get("/offers/edit/{id}", [OfferController::class, "edit"]);
Route::post("/offers/edit/{id}", [OfferController::class, "update"]);
Route::get('/offers/{id}', [OfferController::class, "describe"]);

Route::get("/profile", [UserController::class, "index"]);
Route::get("/profile/edit", [UserController::class, "edit"]);
Route::post("/profile/edit", [UserController::class, "update"]);
Route::get("/register", [UserController::class, "create"])->middleware('guest');
Route::post("/register", [UserController::class, "store"])->middleware('guest');
Route::post("/logout", [UserController::class, "logout"]);
Route::get("/login", [UserController::class, "log"]);
Route::post("/login", [UserController::class, "login"]);

Route::delete('/profile/{id}', [ProductController::class, "delete"]);
Route::get('profile/product',[ProductController::class, "create"]);
Route::post('profile/product',[ProductController::class, "store"]);
