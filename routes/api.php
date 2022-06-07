<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;


Route::get('/hi', [TestController::class, 'sayHi'])->name('say-hi');
Route::get('/all_users/{id?}', [UserController::class, 'getAllUsers']);
//Route::get('/register/{user_type_id}', [TestController::class, 'signUp'])->name('sign-up');


