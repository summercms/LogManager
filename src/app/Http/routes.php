<?php

// Admin Interface Routes
Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin'], function()
{
	// Logs
	Route::get('log', 'LogController@index');
	Route::get('log/preview/{file_name}', 'LogController@preview');
	Route::get('log/download/{file_name}', 'LogController@download');
	Route::delete('log/delete/{file_name}', 'LogController@delete');
});