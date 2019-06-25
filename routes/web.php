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

Route::post('send', 'mailController@send')->name('mail');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::view('all-Nile-River-Cruises', 'main_packeges_river')->name('all-Nile-River-Cruises');
Route::view('cairo-egypt-budget-holiday-tour-package', 'egyptTours/testOfEgypt')->name('single_tour');
Route::view('about-us', 'about_us')->name('about_us');
Route::view('contact-us', 'contact_us')->name('contact_us');
Route::view('Terms-and-conditions', 'term')->name('term');
Route::view('egypt-faq', 'faq')->name('faq');
Route::view('single_river', 'egyptTours/single_river')->name('single_river');
Route::view('Egypt_Excursion', 'excursion')->name('Egypt_Excursion');



Route::get('admin',[
   'uses' => 'AdminController@index',
   'as'   => 'Admin' 
]);
Route::group(['prefix' => 'admin', 'middleware'=> 'auth'], function(){
   Route::get('/media',[
      'uses' => 'AvatarController@index',
      'as'   => 'media'
   ]);
   Route::get('/iamge/delete/{id}',[
      'uses' => 'AvatarController@destroy',
      'as'   => 'media.delete'
   ]);
   Route::resource('avatar','AvatarController');
   Route::resource('post','PostController');
   
   
   Route::get('/slider', [
      'uses' => 'HomeController@slider',
      'as'   => 'slider'
   ]);
   Route::post('/slider/store', [
      'uses' => 'HomeController@slider_store',
      'as'   => 'slider.store'
   ]);
   Route::get('/posts/trashed', [
      'uses' => 'PostController@delete',
      'as'   => 'post.trashed'
   ]);
   Route::get('/posts/kill/{id}', [
      'uses' => 'PostController@kill',
      'as'   => 'post.kill'
   ]);
   Route::get('/posts/restore/{id}', [
      'uses' => 'PostController@restore',
      'as'   => 'post.restore'
   ]);
   // pages route 
   Route::get('/page/add', [
      'uses' => 'PagesController@add',
      'as'   => 'page.add'
   ]);
   Route::post('/page/store', [
      'uses' => 'PagesController@store',
      'as'   => 'page.store'
   ]);
   Route::post('/subpage/store', [
      'uses' => 'PagesController@substore',
      'as'   => 'subpage.store'
   ]);
   
   Route::get('/page/edit/{id}', [
      'uses' => 'PagesController@editPage',
      'as'   => 'page.edit'
   ]);
   Route::post('/page/update/{id}', [
      'uses' => 'PagesController@updatePage',
      'as'   => 'page.update'
   ]);
   Route::get('/page/delete/{id}', [
      'uses' => 'PagesController@deletePage',
      'as'   => 'page.delete'
   ]);

   Route::get('/page/trashed', [
      'uses' => 'PagesController@trashedPage',
      'as'   => 'page.trashed'
   ]);
   Route::get('/page/kill/{id}', [
      'uses' => 'PagesController@killPage',
      'as'   => 'page.kill'
   ]);
   Route::get('/page/restore/{id}', [
      'uses' => 'PagesController@restorePage',
      'as'   => 'page.restore'
   ]);
   // end pages route

   // start suppage route
   
   Route::get('/subpage/edit/{id}', [
      'uses' => 'PagesController@editSubPage',
      'as'   => 'subPage.edit'
   ]);
   Route::post('/subpage/update/{id}', [
      'uses' => 'PagesController@updateSubPage',
      'as'   => 'subPage.update'
   ]);
   Route::get('/subpage/delete/{id}', [
      'uses' => 'PagesController@deleteSubPage',
      'as'   => 'subPage.delete'
   ]);

   Route::get('/subpage/trashed', [
      'uses' => 'PagesController@trashedSubPage',
      'as'   => 'subPage.trashed'
   ]);
   Route::get('/subpage/kill/{id}', [
      'uses' => 'PagesController@killSubPage',
      'as'   => 'subPage.kill'
   ]);
   Route::get('/subpage/restore/{id}', [
      'uses' => 'PagesController@restoreSubPage',
      'as'   => 'subPage.restore'
   ]);
   // end suppage route

  // start Accommodation route
 

  Route::get('/Accommodation/trashed', [
   'uses' => 'AccommodationsController@trashedAccommodation',
   'as'   => 'Accommodation.trashed'
   ]);
   Route::get('/Accommodation/kill/{id}', [
      'uses' => 'AccommodationsController@killAccommodation',
      'as'   => 'Accommodation.kill'
   ]);
   Route::get('/Accommodation/restore/{id}', [
      'uses' => 'AccommodationsController@restoreAccommodation',
      'as'   => 'Accommodation.restore'
   ]);
   Route::resource('Accommodation','AccommodationsController');
   //end Accommodation route



   // start Programs route
 

  Route::get('/Program/trashed', [
   'uses' => 'ProgramsController@trashedProgram',
   'as'   => 'Program.trashed'
   ]);
   Route::get('/AccommProgramodation/kill/{id}', [
      'uses' => 'ProgramsController@killProgram',
      'as'   => 'Program.kill'
   ]);
   Route::get('/Program/restore/{id}', [
      'uses' => 'ProgramsController@restoreProgram',
      'as'   => 'Program.restore'
   ]);
   Route::resource('Program','ProgramsController');
   //end Programs route
   
});





Route::get('/{slug}', [
   'uses' => 'PagesController@findPage',
]);
