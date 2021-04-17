<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/admin', function () {
    return 'Hello Admin';
});*/
//Laravel Controller Middleware
Route::group(['namespace' => 'Admin'], function () {
    Route::get('second', 'SecondController@showString');
});

