<?php

Auth::routes();

Route::get('/', 'DefaultController@handle');

Route::get('/home', 'HomeController@index');

Route::get('/setpreferences', 'PreferencesController@show');
Route::post('/setpreferences', 'PreferencesController@store');

Route::get('/createjob', 'JobsController@show');
Route::post('/createjob', 'JobsController@store');

Route::get('/setprofile', 'ProfileController@show');
Route::post('/setprofile', 'ProfileController@store');

Route::get('/users/employers', 'ShowUsersController@showEmployers')->middleware('checkfree');
Route::get('/users/employers/{user}', 'ShowUsersController@showEmployer');
Route::get('/users/freelancers', 'ShowUsersController@showFreelancers')->middleware('checkemp');
Route::get('/users/freelancers/{user}', 'ShowUsersController@showFreelancer')->middleware('checkemp');

Route::resource('/jobs', 'ShowJobsController');
Route::get('/jobs/{job}', 'ShowJobsController@show');
