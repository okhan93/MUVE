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

Route::get('/', 'PagesController@showAllListing');
Route::get('/listings', 'ListingsController@listingExtract');
Route::get('/proplist/{mlsNum}', ['as' => 'proplist', 'uses' => 'PropertyInfo@showDetails']);
Route::get('/maplisting', 'MapListings@mapPlot');
