<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "Hello World";
});

Route::get('/test1', function () {
    return view('test.test');
});

Route::get('/test2/{name}', function ($name) {
    return "Hello ".$name;
}) ->name('test.param');

Route::get('/test3/{name?}', function ($name = null) {
    if($name == null) {
        return "Hello World";
    } else {
        return "Welcome ".$name;
    }
});

Route::get('/admin/test2/{name}', function ($name) {
    return "Hello ".$name;
}) ->name('test.param');

Route::prefix('admin')->group(function(){
    Route::get('/test1', function () {
        return view('test.test');
    });
});