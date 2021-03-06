<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestaurantController;


Route::get('/hi', [TestController::class, 'sayHi'])->name('say-hi');
Route::get('/all_users', [UserController::class, 'getAllUsers']);
Route::post('/get_user/{user_id?}', [UserController::class, 'getUser']);

Route::post('/add_resto', [RestaurantController::class, 'addResto']);
Route::post('/display_resto/{restaurant_id?}', [RestaurantController::class, 'displayResto']);
Route::post('/display_restos', [RestaurantController::class, 'displayRestos']);


Route::post('/add_user', [UserController::class, 'addUser']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/update_pro/{user_id}', [UserController::class, 'updateProfile']);

//Route::get('/register/{user_type_id}', [TestController::class, 'signUp'])->name('sign-up');


