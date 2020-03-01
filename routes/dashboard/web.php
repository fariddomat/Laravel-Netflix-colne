<?php
 Route::prefix('dashboard')
    ->name('dashboard.')
    ->middleware(['auth', 'role:super_admin|admin'])
    ->group(function(){
        Route::get('/','WelcomeController@index')->name('welcome');

        Route::resource('categories','CategoryController');
        Route::resource('movies','MovieController');
        Route::resource('roles','RoleController');
        Route::resource('users','UserController');

        Route::get('/settings/social_login','SettingController@social_login')->name('setting.social_login');
        Route::get('/settings/social_links','SettingController@social_links')->name('setting.social_links');
        Route::post('/settings','SettingController@store')->name('settings.store');

});   

