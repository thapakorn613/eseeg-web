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

Route::get('/', function () { return view('welcome'); });
Route::get('/ecg-chart', function () { return view('chart'); });
Route::get('/list-node', function () { return view('menu.listNode'); });
Route::get('/about', function () { return view('menu.about'); });
Route::get('/contact', function () { return view('menu.contact'); });

