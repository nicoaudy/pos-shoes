<?php

Route::namespace('Api\v1')->group(function () {
    Route::post('login', 'Auth\LoginController@login');

    # Protected Route
    Route::middleware('auth:api')->group(function () {
        Route::get('me', 'ProfileController@index');
    });
});
