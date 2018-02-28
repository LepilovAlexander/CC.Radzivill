<?php

//MainController group
Route::get('/', 'MainController@home');
Route::get('accounting', 'MainController@accounting');
Route::get('juristic', 'MainController@juristic');
Route::get('personnel', 'MainController@personnel');
Route::get('development', 'MainController@development');
Route::get('holidays', 'MainController@holidays');
Route::get('courses', 'MainController@courses');
Route::get('contacts', 'MainController@contacts');
Route::post('/sendmail', 'Ajax/ContactController@send');
