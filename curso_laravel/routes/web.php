<?php

Route::get('/', 'PagesController@home')->name('home');

Route::get('/detail/{id}', 'PagesController@detail')->name('notes.detail');

Route::post('/', 'PagesController@create')->name('notes.create');

Route::get('/edit/{id}', 'PagesController@edit')->name('notes.edit');

Route::put('/edit/{id}', 'PagesController@update')->name('notes.update');

Route::delete('/delete/{id}', 'PagesController@delete')->name('notes.delete');

Route::get('pictures', 'PagesController@pictures')->name('pictures');

Route::get('blog', 'PagesController@blog')->name('blog');

Route::get('about_us/{name?}', 'PagesController@about_us')->name('about_us');