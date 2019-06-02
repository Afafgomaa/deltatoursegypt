<?php


Route::get('/', [
    'uses' => 'frontendController@index',
    'as' => 'home'
]);
Route::get('/Egypt-tours-Packages', [
   'uses' => 'frontendController@Packages',
   'as'   => 'Packages'
   ]);

Route::get('/Nile-River-Cruises', [
   'uses' => 'frontendController@Nile_River_Cruises',
   'as'   => 'Nile-River-Cruises'
   ]);
Route::get('egyptholidays',[
'uses' => 'frontendController@Egypt_tour',
'as' => 'Egypt_tour'
]);

Route::get('/Customized_Tours_to_egypt',[
'uses' => 'frontendController@Tailor_Made',
'as' => 'Tailor_Made'
]);
Route::get('/Egypt-Budget-Tours',[
'uses' => 'frontendController@Budget_Tours',
'as' => 'Budget_Tours'
]);
Route::get('/all_packeges',[
'uses' => 'frontendController@all_packeges',
'as' => 'all_packeges'
]);




