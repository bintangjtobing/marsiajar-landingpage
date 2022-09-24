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
Route::get('/log-viewer', [
    'as'   => 'log-viewer::dashboard',
    'uses' => '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@index',
]);
// Social media link
Route::get('/linkedin', function () {
    return Redirect::to('https://linkedin.com/company/');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/instagram', function () {
    return Redirect::to('http://www.instagram.com/marsiajar');
});
Route::get('/facebook', function () {
    return Redirect::to('http://www.facebook.com/Marsiajaran');
});

$token = Str::random(16);
// General Menu
Route::get('/', 'webpageController@index');
Route::get('/{token}/register', 'webpageController@register');
Route::post('/{token}/register', 'webpageController@postRegister');
Route::get('/news', 'webpageController@news');
Route::get('/events', 'webpageController@events');
Route::get('/events/{slug}', 'webpageController@getEvents')->name('events');
Route::get('/events/registration/{slug}', 'webpageController@getEventsApply')->name('events');
Route::post('/events/registration/{slug}', 'webpageController@postEventsApply')->name('events');
// Route::get('/gallery', 'webpageController@gallery');
Route::get('/about-us', 'webpageController@aboutUs');
Route::get('/contact-us', 'webpageController@contactUs');

Route::get('/educative/{slug}', 'webpageController@eduCategories');
Route::get('/tag/{slug}', 'webpageController@getArticleByTag');
Route::get('/rencana-ajar', 'webpageController@rencanaAjar');
Route::get('/lembar-kerja', 'webpageController@lembarKerja');
Route::get('/inspirasi', 'webpageController@inspirasi');
Route::get('/detail', 'webpageController@detailAjar');
Route::get('/read/{slug}', 'webpageController@readArticle');


// additional
Route::get('/terms-conditions', 'additionalController@terms');
Route::get('/privacy-policy', 'additionalController@privacy');
Route::post('/comments/{slug}', 'webpageController@postComments');


// Route::get('/faqs', 'additionalController@faqs');
// Route::get('/plans', 'additionalController@plans');
