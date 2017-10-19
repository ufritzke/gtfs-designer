<?php

Route::get('/', 'MainController@index');
Route::get('/login', 'LoginController@login');
Route::post('/login/auth', 'LoginController@auth');
Route::get('/logout', 'LoginController@logout');
Route::resource('/user', 'UserController', ['except' => ['index']]);
