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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () { return view('welcome'); });
Route::get('/ecg-chart', function () { return view('chart'); });
// Route::get('/home', function () { return view('Home'); });
// Route::get('/emergency', function () { return view('Emergency'); });

Route::get('/home', 'MenuController@toHome' );
Route::get('/about', 'MenuController@toAbout' );
Route::get('/contact', 'MenuController@toContact' );
Route::get('/service', 'MenuController@toService' );

Route::get('/emergency', 'DoctorController@showListEM' );

Route::get('/advice', 'DoctorController@showListDoctor' );

Route::get('/patient',  'DoctorController@showListPatient' );
Route::get('/patient/showChart/{id?}',  'DoctorController@showChart' );
Route::get('/showChart',  'DoctorController@showChart_test' );

Route::get('/log', function () { return view('Patient_Log'); });
Route::get('/log/1', function () { return view('Patient_Log'); });

Route::get('/list-node', function () { return view('menu.listNode'); });

