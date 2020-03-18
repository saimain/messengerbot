<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('facebook_messenger_api', 'MessengerController@index');
Route::post('facebook_messenger_api', 'MessengerController@index');
