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
Use App\Http\Middleware\checkdoctors;

Route::group(['middleware' => 'checkdoctors'], function () {
    Route::get('/dashboard','DashboardController@index');
    Route::get('/history', 'DashboardController@history');
    Route::get('/createData', 'DashboardController@create');
    Route::post('/createData/created', 'DashboardController@created')->name('createData.created');
// Route::get('/firebase','FirebaseController@index');
    Route::get('/profile', 'DashboardController@profile');
    Route::post('/profile/updated', 'DashboardController@updateProfile');
    Route::get('/exported','DashboardController@export');
    Route::get('/history/search','DashboardController@search');
    Route::get('/history/fetch_data', 'DashboardController@fetch_data');

});

Route::post('/register/success', 'RegisterController@register');
Route::post('/login/success', 'LoginController@login');

Route::get('/logout', 'LoginController@logout');


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



