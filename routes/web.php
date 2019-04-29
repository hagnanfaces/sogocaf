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

//Route::redirect('/','/fr');

Route::prefix(\LaravelLocalization::setLocale())
    ->middleware([
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath'
    ])
    ->group(function () {
        Route::name('home')->get('/', 'ContactController@index');
//        Route::view('/blog', 'pages.blog');
//        Route::view('/services', 'pages.service');
//        Route::view('/services/{service}', 'pages.service.show');
//        Route::view('/categories', 'pages.category');
//        Route::view('/categories/{category}', 'pages.category');
//        Route::view('/categories/{category}/product/{product}', 'pages.category.show');
//        Route::view('/produits', 'pages.product');
//        Route::view('/devis', 'pages.consult');
        Route::name('service.index')->get('/service','ServiceController@index');
        Route::name('service.show')->get('/service/{service}','ServiceController@show');
        Route::name('category.index')->get('/category','CategoryController@index');
        Route::name('category.show')->get('/category/{category}','CategoryController@show');
        Route::name('category.product')->get('/category/{category}/product/{product}','CategoryController@show');
        Route::name('contact')->get('/contact','ContactController@contact');
    });
