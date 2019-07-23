<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/notes', 'NoteController');

Route::get('/home', 'HomeController@index')->name('home');
