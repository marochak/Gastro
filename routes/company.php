<?php

use Illuminate\Support\Facades\Route;



Route::get('/Dashboard', 'Company\DashboardController@index')->name('company.Dashboard');


Route::get('/information', 'Company\CompanyController@create')->name('company.create');
Route::patch('/information/{company}', 'Company\CompanyController@update')->name('company.update');
