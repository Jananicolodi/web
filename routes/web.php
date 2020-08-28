<?php

// use Illuminate\Support\Facades\Route;

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
Route::any('products/search','RepositorioController@search')->name('products.search');
Route::resource('products','RepositorioController');//->middleware(['auth','check.is.admin']);
// Route::resource('professor','ProfessorController');//->middleware(['auth','check.is.admin']);

Route::get('/login', function () {
    return "Login";
})->name('login');
Route::get('/ler_PDF',function(){
    return view('admin.pages.pdf');
});
Route::get('/list','RepositorioController@list');
Route::get('/ver_arquivo','RepositorioController@ver_arquivo');
Route::get('/perfil_egresso','RepositorioController@perfil_egresso');
Route::get('/teste','RepositorioController@teste');


Auth::routes(['register' => false]);

