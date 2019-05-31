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
Route::get('/Egypt-tours-Packages', [
   'uses' => 'frontendController@Packages',
   'as'   => 'Packages']
    );

Route::get('/Nile-River-Cruises', [
   'uses' => 'frontendController@Nile_River_Cruises',
   'as'   => 'Nile-River-Cruises']
    );
Route::get('egyptholidays',[
'uses' => 'frontendController@Egypt_tour',
'as' => 'Egypt_tour'
]);

Route::get('/Customized_Tours_to_egypt',[
'uses' => 'frontendController@Tailor_Made',
'as' => 'Tailor_Made'
]);


