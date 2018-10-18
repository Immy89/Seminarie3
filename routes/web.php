<?php

Route::get('/', 'setupCtrl@index');
Route::get('/LoggaIn_Registrera', 'setupCtrl@LoggaIn_Registrera')->name('LoggaIn_Registrera');
Route::get('/SidanUnderUppbyggnad', 'setupCtrl@SidanUnderUppbyggnad')->name('SidanUnderUppbyggnad');

Route::get('/December2017', 'calendarCtrl@dec17')->name('December2017');
Route::get('/Januari2018', 'calendarCtrl@jan18')->name('Januari2018');
Route::get('/Februari2018', 'calendarCtrl@feb18')->name('Februari2018');

Route::get('/recipe/{id}', 'recipesCtrl@show')->name('show');