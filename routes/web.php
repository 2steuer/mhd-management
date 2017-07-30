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

Route::get('login', 'Auth\LoginController@loginform')
    ->name('login');
Route::post('checklogin', 'Auth\LoginController@checklogin')
    ->name('login.check');

Route::get('/', function() {
    return redirect()->route('home');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('logout', 'Auth\LoginController@logout')
        ->name('login.logout');

    Route::get('home', function() {
        return view('pages.welcome.welcome');
    })->name('home');

    Route::resource('users', 'UserController');
    Route::get('users/{id}/confirmdelete', 'UserController@confirmdelete')
        ->name('users.confirmdelete');

    Route::resource('vehicles', 'VehicleController');
    Route::get('vehicles/{id}/confirmdelete', 'VehicleController@confirmdelete')
        ->name('vehicles.confirmdelete');
    Route::get('vehicles/{id}/up', 'VehicleController@moveUp')
        ->name('vehicles.moveUp');
    Route::get('vehicles/{id}/down', 'VehicleController@moveDown')
        ->name('vehicles.moveDown');

    Route::resource('qualifications', 'QualificationController');
    Route::get('qualifications/{id}/confirmdelete', 'QualificationController@confirmdelete')
        ->name('qualifications.confirmdelete');
    Route::get('qualifications/{id}/up', 'QualificationController@moveUp')
        ->name('qualifications.moveUp');
    Route::get('qualifications/{id}/down', 'QualificationController@moveDown')
        ->name('qualifications.moveDown');

});
