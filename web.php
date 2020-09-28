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

Route::view('/', 'welcome');
Route::view('/addTrip', 'add_trip');
Route::get('/translate', 'demoTrans@changeLang');
Route::view('/home', 'homepanel');
Route::view('/demo', 'home');
Route::get('getData', 'saveData@getMyData')->middleware('myOwnMiddleware');
Route::post('data', 'saveData@save');
Route::get('generatepdf','PDFController@generatePDF');

// localization
Route::get('/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('welcome');
});
