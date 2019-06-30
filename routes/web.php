<?php


Route::get('/', [
    'uses' => 'frontendController@index',
    'as' => 'home'
]);

Route::get('/test', function(){
   return    ;
});

Route::get('/Customized_Tours_to_egypt',[
   'uses' => 'frontendController@tailorMade',
   'as' => 'Tailor_Made'
   ]);
Route::get('/blog',[
   'uses' => 'frontendController@blog',
   'as' => 'blog'
   ]);

Route::post('send/email', 'mailController@send')->name('mail');





Route::view('all-Nile-River-Cruises', 'main_packeges_river')->name('all-Nile-River-Cruises');
Route::view('cairo-egypt-budget-holiday-tour-package', 'egyptTours/testOfEgypt')->name('single_tour');
Route::view('about-us', 'about_us')->name('about_us');
Route::view('contact-us', 'contact_us')->name('contact_us');
Route::view('Terms-and-conditions', 'term')->name('term');
Route::view('egypt-faq', 'faq')->name('faq');
Route::view('single_river', 'egyptTours/single_river')->name('single_river');
Route::view('Egypt_Excursion', 'excursion')->name('Egypt_Excursion');




Auth::routes();
Route::view('/register', 'auth/login');

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
   Route::get('/Program/kill/{id}', [
      'uses' => 'ProgramsController@killProgram',
      'as'   => 'Program.kill'
   ]);
   Route::get('/Program/restore/{id}', [
      'uses' => 'ProgramsController@restoreProgram',
      'as'   => 'Program.restore'
   ]);
   Route::resource('Program','ProgramsController');
   //end Programs route

    // start add on route
 

    Route::get('/Addon/trashed', [
      'uses' => 'AddOnController@trashedAddon',
      'as'   => 'Addon.trashed'
      ]);
      Route::get('/Addon/kill/{id}', [
         'uses' => 'AddOnController@killAddon',
         'as'   => 'Addon.kill'
      ]);
      Route::get('/Addon/restore/{id}', [
         'uses' => 'AddOnController@restoreProgram',
         'as'   => 'Addon.restore'
      ]);
      Route::resource('Addon','AddOnController');
      //end AddOn route

       // start Hileights on route
 

    Route::get('/highlight/trashed', [
      'uses' => 'HighlightController@trashedHighlight',
      'as'   => 'highlight.trashed'
      ]);
      Route::get('/highlight/kill/{id}', [
         'uses' => 'HighlightController@killHighlight',
         'as'   => 'highlight.kill'
      ]);
      Route::get('/highlight/restore/{id}', [
         'uses' => 'HighlightController@restoreHighlight',
         'as'   => 'highlight.restore'
      ]);
      Route::resource('highlight','HighlightController');
      //end highlight route

      // start Sights on route
 

    Route::get('/sight/trashed', [
      'uses' => 'SightsController@trashedSight',
      'as'   => 'sight.trashed'
      ]);
      Route::get('/sight/kill/{id}', [
         'uses' => 'SightsController@killSight',
         'as'   => 'sight.kill'
      ]);
      Route::get('/sight/restore/{id}', [
         'uses' => 'SightsController@restoreSight',
         'as'   => 'sight.restore'
      ]);
      Route::resource('sight','SightsController');
      //end Sights route

      //end Sections route
         Route::get('/section/trashed', [
         'uses' => 'SectionsController@trashedSection',
         'as'   => 'section.trashed'
         ]);
         Route::get('/section/kill/{id}', [
            'uses' => 'SectionsController@killSection',
            'as'   => 'section.kill'
         ]);
         Route::get('/section/restore/{id}', [
            'uses' => 'SectionsController@restoreSection',
            'as'   => 'section.restore'
         ]);
         Route::resource('section','SectionsController');
      //end sections route

      //end promo route
         Route::get('/promo/trashed', [
         'uses' => 'PromoController@trashedPromo',
         'as'   => 'promo.trashed'
         ]);
         Route::get('/promo/kill/{id}', [
            'uses' => 'PromoController@killPromo',
            'as'   => 'promo.kill'
         ]);
         Route::get('/promo/restore/{id}', [
            'uses' => 'PromoController@restorePromo',
            'as'   => 'promo.restore'
         ]);
         Route::resource('promo','PromoController');
      //end promo route

      //end Referral route
         Route::get('/referral/trashed', [
         'uses' => 'ReferralController@trashedReferral',
         'as'   => 'referral.trashed'
         ]);
         Route::get('/referral/kill/{id}', [
            'uses' => 'ReferralController@killReferral',
            'as'   => 'referral.kill'
         ]);
         Route::get('/referral/restore/{id}', [
            'uses' => 'ReferralController@restoreReferral',
            'as'   => 'referral.restore'
         ]);
         Route::resource('referral','ReferralController');
      //end Referral route
   
});
      

      






   Route::get('/{mainPage}', [
      'uses' => 'PagesController@findPage',
      'as'   => 'mainPage'
   ]);



   Route::get('/{mainPage}/{subPage}', [
      'uses' => 'PagesController@findSubPage',
      'as'   => 'subPage'
      
   ]);
   Route::get('/{mainPage}/{subPage}/{program}', [
   'uses' => 'ProgramsController@findProgram',
   ]);
 
 
  
