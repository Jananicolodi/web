<?php

// use Illuminate\Support\Facades\Route;

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
Route::any('products/search','RepositorioController@search')->name('products.search');
Route::resource('products','RepositorioController');//->middleware(['auth','check.is.admin']);

Route::get('/login', function () {
    return "Login";
})->name('login');


Auth::routes(['register' => false]);

