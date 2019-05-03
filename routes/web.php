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

// Route::get('/', function () {
//     return view('view');
// });


Route::get('/', function () {
    return view('public.landing');
});


Route::get('/admin', function () {
    return view('adminmenu.menu');
});

//Route::get('/' , 'CrudsController@index')->name('menu');
Route::resource('crud','CrudsController');

Route::resource('fcont','FeaturesController');

Route::resource('mcont','MenusController');

Route::resource('feedcont','FeedbacksController');

Route::resource('sctcont','ScreenshotsController');