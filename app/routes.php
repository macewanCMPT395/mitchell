<?php
Route::get('/check', function(){
    $users = User::all();
    return $users;
    });
Route::get('/', 'PagesController@login');
Route::get('homepage', 'PagesController@home');
Route::get('recoverpage', 'PagesController@recover');
Route::get('createpage', 'PagesController@create');
Route::post('create', 'PagesController@createprofile');
Route::post('/', 'PagesController@login');
Route::post('createpage', 'PagesController@create');
Route::post('homepage', 'PagesController@home');
Route::post('recoverpage', 'PagesController@recover');
Route::post('mail', 'PagesController@mail');
Route::post('login', 'PagesController@home');
