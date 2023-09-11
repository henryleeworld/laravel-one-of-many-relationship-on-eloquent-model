<?php

use App\Http\Controllers\RelationshipController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('user/login/', [RelationshipController::class, 'userLogin']);
Route::get('user/state/', [RelationshipController::class, 'userState']);
Route::get('product/price/', [RelationshipController::class, 'productPrice']);
