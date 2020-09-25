<?php

use Illuminate\Support\Facades\Route;





Route::middleware(['middleware'=> 'auth:admin'])->group(function () {
    Route::get('/Dashboard', 'Admin\AdminDashbord@index')->name('getAdminDashboard');

});

Route::middleware(['middleware'=> 'guest:admin'])->group(function () {
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('getAdminLogin');
    Route::post('login', 'Auth\AdminLoginController@login')->name('checkAdminLogin');
    Route::get('logout', 'Auth\AdminLoginController@logout')->name('adminLogout');
});
