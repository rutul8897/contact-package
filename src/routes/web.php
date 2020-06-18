<?php


Route::group(['namespace'=>'Rutul\Contact\Http\Controllers'],function(){

	Route::get('contact','ContactController@index')->name('contact');
	Route::post('contact','ContactController@send');

});