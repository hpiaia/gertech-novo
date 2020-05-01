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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/empresa', 'CompanyController@index')->name('company');
Route::get('/trabalhe-conosco', 'JobsController@index')->name('jobs');
Route::get('/solucoes', 'SolutionsController@index')->name('solutions');
Route::get('/solucoes/{solution}', 'SolutionsController@show')->name('solutions.show');
Route::get('/contato', 'ContactController@index')->name('contact');
Route::post('/contato', 'ContactController@store');

Route::get('locale/{lang}', 'LocaleController@index')->name('locale');
