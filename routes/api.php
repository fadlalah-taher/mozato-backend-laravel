<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;


Route::get('/hi', [TestController::class, 'sayHi'])->name('say-hi');
Route::get('/all_users', [UserController::class, 'getAllUsers']);

Route::post('/add_resto', [UserController::class, 'addResto']);


Route::post('/add_user', [UserController::class, 'addUser']);
Route::post('/login', [UserController::class, 'login']);

Route::post('/update_pro/{user_id}', [UserController::class, 'updateProfile']);

//Route::get('/register/{user_type_id}', [TestController::class, 'signUp'])->name('sign-up');


