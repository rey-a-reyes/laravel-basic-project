<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/' , [HomeController::class , 'index']);

Route::post('/add_product',[HomeController::class , 'add_product']);

Route::get('/show_product',action: [HomeController::class, 'show_product']);
Route::get('/delete_product/{id}',action: [HomeController::class, 'delete_product']);
Route::get('/update_product/{id}',action: [HomeController::class, 'update_product']);
Route::post('/edit_product/{id}',action: [HomeController::class, 'edit_product']);
