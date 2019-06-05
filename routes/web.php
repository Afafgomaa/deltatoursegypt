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
   'uses' => 'frontendController@nileRiverCruises',
   'as'   => 'Nile-River-Cruises'
   ]);
Route::get('egyptholidays',[
'uses' => 'frontendController@egyptTour',
'as' => 'Egypt_tour'
]);

Route::get('/Customized_Tours_to_egypt',[
'uses' => 'frontendController@tailorMade',
'as' => 'Tailor_Made'
]);
Route::get('/Egypt-Budget-Tours',[
'uses' => 'frontendController@budgetTours',
'as' => 'Budget_Tours'
]);
Route::get('/all_packeges',[
'uses' => 'frontendController@allPackeges',
'as' => 'all_packeges'
]);
Route::get('/blog',[
   'uses' => 'frontendController@blog',
   'as' => 'blog'
   ]);

Route::view('all-Nile-River-Cruises', 'main_packeges_river')->name('all-Nile-River-Cruises');
Route::view('cairo-egypt-budget-holiday-tour-package', 'egyptTours/testOfEgypt')->name('single_tour');
Route::view('about-us', 'about_us')->name('about_us');



