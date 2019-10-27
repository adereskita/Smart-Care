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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboardView', function () {
    return view('dashboar');
});

Route::get('/inputDataView', function () {
    return view('inputData');
});
// =======

// >>>>>>> f9781b4e01895fc31243f41898c4bcdeb799bee3
// Route::get('/firebase','FirebaseController@index');

