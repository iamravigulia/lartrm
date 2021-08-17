<?php
use Illuminate\Support\Facades\Route;

// Route::get('Lartrm/test', 'EdgeWizz\Lartrm\Controllers\LartrmController@test')->name('test');

Route::post('fmt/lartrm/store', 'EdgeWizz\Lartrm\Controllers\LartrmController@store')->name('fmt.lartrm.store');

Route::post('fmt/lartrm/csv', 'EdgeWizz\Lartrm\Controllers\LartrmController@csv')->name('fmt.lartrm.csv');
Route::post('fmt/lartrm/update/{id}', 'EdgeWizz\Lartrm\Controllers\LartrmController@update')->name('fmt.lartrm.update');
Route::any('fmt/lartrm/inactive/{id}',  'EdgeWizz\Lartrm\Controllers\LartrmController@inactive')->name('fmt.lartrm.inactive');
Route::any('fmt/lartrm/active/{id}',  'EdgeWizz\Lartrm\Controllers\LartrmController@active')->name('fmt.lartrm.active');
