<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('sc/dev')->group(function () {
    Route::get('/uat', function () {
        return Redirect::to('https://docs.google.com/spreadsheets/d/e/2PACX-1vTSANWYAzhvdIu6A8GSpy5KhjsZeUamYlbvWWhmES13PUwAsDy0-TJ4uErmZgxSLR5DUOIZckGO5G20/pubhtml');
    });
});

// Social media link
Route::get('/linkedin', function () {
    return Redirect::to('https://linkedin.com/company/');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/instagram', function () {
    return Redirect::to('http://www.instagram.com/');
});
Route::get('/facebook', function () {
    return Redirect::to('http://www.facebook.com/');
});

Route::get('/', 'webpageController@index');


// additional
Route::get('/terms-conditions', 'additionalController@terms');
Route::get('/privacy-policy', 'additionalController@privacy');
// Route::get('/faqs', 'additionalController@faqs');
// Route::get('/plans', 'additionalController@plans');
