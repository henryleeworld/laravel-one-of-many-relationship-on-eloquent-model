<?php

use App\Http\Controllers\RelationshipController;
use Illuminate\Support\Facades\Route;

Route::get('user/login/', [RelationshipController::class, 'userLogin']);
Route::get('user/state/', [RelationshipController::class, 'userState']);
Route::get('product/price/', [RelationshipController::class, 'productPrice']);
