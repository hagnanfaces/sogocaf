<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::redirect('/','/fr');

Route::prefix('{lang}')
    ->group(function () {
        Route::view('/', 'pages.index');
        Route::view('/blog', 'pages.blog');
        Route::view('/services', 'pages.service');
        Route::view('/services/{service}', 'pages.service.show');
        Route::view('/categories', 'pages.category');
        Route::view('/categories/{category}', 'pages.category');
        Route::view('/categories/{category}/product/{product}', 'pages.category.show');
        Route::view('/produits', 'pages.product');
        Route::view('/devis', 'pages.consult');
    });
