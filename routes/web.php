<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Вы попали на тестовую страницу';
});

Route::get('/dir/test', function () {
    return 'Вы попали на вторую тестовую страницу';
});