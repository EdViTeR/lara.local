<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [PostController::class, 'show']);
Route::get('/post/{id}', [PostController::class, 'show']);
Route::get('/user/all/', [UserController::class, 'all']);
Route::get('/user/{name}', [UserController::class, 'name'])->where('name', '[а-яА-ЯЁё]+');
Route::get('/user/{name}/{age}', [UserController::class, 'age'])->where('name', '[а-яА-ЯЁё]+')->whereNumber('age');
Route::get('/user/{surname}/{name}', [UserController::class, 'fullname'])->where('surname', '[а-яА-ЯЁё]+')->where('name', '[а-яА-ЯЁё]+');