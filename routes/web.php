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
Route::get('/survey', function () {
    return view('vendor.survey-manager.admin');
});
Route::get('/cobasurvey', function () {
    return view('survey');
});
Route::get('/coba', function () {
    return view('coba');
});
Route::post('/inputJudul', 'JudulController@getJudul');
Route::post('/inputSubJudul', 'JudulController@getSubJudul');
Route::get('/cariJudul', 'JudulController@loadJudul');