<?php

use App\Http\Controllers\OfferController;
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

Route::permanentRedirect("/", "/offers");
Route::get("/offers", [OfferController::class, "index"]);
Route::get("/offers/create", [OfferController::class, "create"]);
Route::post("/offers/create", [OfferController::class, "store"]);
Route::delete("/offers/{id}", [OfferController::class, "delete"]);
Route::get("/offers/edit/{id}", [OfferController::class, "edit"]);
Route::patch("/offers/edit/{id}", [OfferController::class, "update"]);
