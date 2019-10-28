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
Route::group(['middleware' => 'checkdoctors'], function () {
    Route::post('/login/success', 'LoginController@login');
    Route::post('/register/success', 'RegisterController@register');
});





//VIEW ROUTE
Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/inputDataView', function () {
    return view('inputData');
});

Route::get('/firebase','FirebaseController@index');

