<?php

use Illuminate\Support\Facades\Route;



Route::get('/Dashboard', 'Company\DashboardController@index')->name('company.Dashboard');


Route::get('/site', 'Company\CompanyController@createSite')->name('company.create.site');
